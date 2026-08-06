<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Builds <title>/meta/OG/Twitter tags and JSON-LD blocks for the current
 * route. Controllers pass the matched route's meta array in via 'seo'.
 */
final class Seo
{
    private array $org;
    private string $baseUrl;

    public function __construct(
        private readonly string $title,
        private readonly string $description,
        private readonly string $path,
        private readonly bool $noindex = false,
        private readonly ?string $ogImage = null
    ) {
        $this->org = require dirname(__DIR__, 2) . '/config/seo.php';
        $app = require dirname(__DIR__, 2) . '/config/app.php';
        $this->baseUrl = $app['url'];
    }

    public function canonical(): string
    {
        return $this->baseUrl . $this->path;
    }

    public function robots(): string
    {
        return $this->noindex
            ? 'noindex, nofollow'
            : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
    }

    public function renderMeta(): string
    {
        $title = htmlspecialchars($this->title, ENT_QUOTES, 'UTF-8');
        $description = htmlspecialchars($this->description, ENT_QUOTES, 'UTF-8');
        $canonical = htmlspecialchars($this->canonical(), ENT_QUOTES, 'UTF-8');
        $image = htmlspecialchars($this->ogImage ?? ($this->baseUrl . $this->org['default_og_image']), ENT_QUOTES, 'UTF-8');
        $siteName = htmlspecialchars($this->org['site_name'], ENT_QUOTES, 'UTF-8');
        $twitter = htmlspecialchars($this->org['twitter_handle'], ENT_QUOTES, 'UTF-8');

        return <<<HTML
        <title>{$title}</title>
        <meta name="description" content="{$description}">
        <link rel="canonical" href="{$canonical}">
        <meta name="robots" content="{$this->robots()}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{$title}">
        <meta property="og:description" content="{$description}">
        <meta property="og:url" content="{$canonical}">
        <meta property="og:site_name" content="{$siteName}">
        <meta property="og:locale" content="en_IN">
        <meta property="og:image" content="{$image}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="{$twitter}">
        <meta name="twitter:title" content="{$title}">
        <meta name="twitter:description" content="{$description}">
        <meta name="twitter:image" content="{$image}">
        HTML;
    }

    public function organizationJsonLd(): string
    {
        $org = $this->org;

        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'MedicalBusiness',
            'name' => $org['organization_name'],
            'url' => $this->baseUrl . '/',
            'logo' => $this->baseUrl . $org['logo'],
            'image' => $this->baseUrl . $org['logo'],
            'telephone' => $org['phone'],
            'email' => $org['email'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $org['address']['street'],
                'addressLocality' => $org['address']['locality'],
                'addressRegion' => $org['address']['region'],
                'postalCode' => $org['address']['postal_code'],
                'addressCountry' => $org['address']['country'],
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => $org['geo']['lat'],
                'longitude' => $org['geo']['lng'],
            ],
            'openingHours' => $org['opening_hours'],
            'sameAs' => array_values($org['social']),
        ];

        return $this->jsonLdScript($data);
    }

    public function websiteJsonLd(): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => $this->org['site_name'],
            'url' => $this->baseUrl . '/',
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => $this->baseUrl . '/?s={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ];

        return $this->jsonLdScript($data);
    }

    public function breadcrumbJsonLd(array $crumbs): string
    {
        $items = [];
        foreach ($crumbs as $position => $crumb) {
            $items[] = [
                '@type' => 'ListItem',
                'position' => $position + 1,
                'name' => $crumb['label'],
                'item' => $this->baseUrl . $crumb['url'],
            ];
        }

        return $this->jsonLdScript([
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $items,
        ]);
    }

    public function faqJsonLd(array $faqs): string
    {
        $entities = array_map(static fn (array $faq): array => [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer'],
            ],
        ], $faqs);

        return $this->jsonLdScript([
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $entities,
        ]);
    }

    private function jsonLdScript(array $data): string
    {
        $json = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        return "<script type=\"application/ld+json\">{$json}</script>";
    }
}
