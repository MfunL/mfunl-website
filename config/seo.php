<?php

declare(strict_types=1);

/**
 * Organization-wide SEO / schema.org facts, shared across every page's
 * JSON-LD output. Per-route title/description/overrides live in routes.php.
 */
return [
    'site_name' => 'MfunL',
    'organization_name' => 'MfunL | Healthcare Digital Marketing',
    'logo' => '/assets/images/Mfunl-logo-blue.png',
    'phone' => '+91 8336920676',
    'phone_display' => '83369 20676',
    'whatsapp' => 'https://wa.me/918336920676',
    'email' => 'info@mfunl.com',
    'address' => [
        'street' => 'P-534 Raja Basanta Roy Road, 3rd Floor, Near Southern Avenue Lake Kali Bari, beside Tyagraj Hall',
        'locality' => 'Kolkata',
        'region' => 'West Bengal',
        'postal_code' => '700029',
        'country' => 'IN',
    ],
    'geo' => [
        'lat' => 22.5142533,
        'lng' => 88.3563339,
    ],
    'opening_hours' => 'Mo-Fr 10:00-19:00',
    'founder' => 'Kuntal Chatterjee',
    'social' => [
        'facebook' => 'https://www.facebook.com/MfunLDigitalMarketingAgency/',
        'instagram' => 'https://www.instagram.com/mfunl/',
        'youtube' => 'https://www.youtube.com/@mfunldigitalmarketing',
        'linkedin' => 'https://www.linkedin.com/company/mfunl/',
        'twitter' => 'https://x.com/MfunLOfficial',
        'pinterest' => 'https://in.pinterest.com/mfunlofficial/',
    ],
    'default_og_image' => '/assets/images/og-default.jpg',
    'twitter_handle' => '@MfunLOfficial',
];
