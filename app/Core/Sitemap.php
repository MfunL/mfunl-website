<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Builds sitemap.xml (index + per-group children) straight from routes.php.
 */
final class Sitemap
{
    public static function index(): string
    {
        $app = require dirname(__DIR__, 2) . '/config/app.php';
        $groups = self::groups();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
        foreach (array_keys($groups) as $group) {
            $xml .= "  <sitemap><loc>{$app['url']}/sitemap-{$group}.xml</loc></sitemap>" . PHP_EOL;
        }
        $xml .= '</sitemapindex>';

        return $xml;
    }

    public static function group(string $group): string
    {
        $app = require dirname(__DIR__, 2) . '/config/app.php';
        $groups = self::groups();
        $routes = $groups[$group] ?? [];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
        foreach ($routes as $uri => $meta) {
            $loc = htmlspecialchars($app['url'] . $uri, ENT_QUOTES, 'UTF-8');
            $xml .= "  <url><loc>{$loc}</loc><lastmod>" . date('Y-m-d') . '</lastmod></url>' . PHP_EOL;
        }
        $xml .= '</urlset>';

        return $xml;
    }

    private static function groups(): array
    {
        $routes = require dirname(__DIR__, 2) . '/config/routes.php';
        $groups = [];

        foreach ($routes as $uri => $meta) {
            if (($meta['group'] ?? 'pages') === 'admin' || !empty($meta['noindex'])) {
                continue;
            }
            $groups[$meta['group'] ?? 'pages'][$uri] = $meta;
        }

        return $groups;
    }
}
