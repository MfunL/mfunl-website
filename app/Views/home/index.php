<?php
/** @var array $faqs */
$sections = [
    '01-hero', '02-client-marquee', '03-services-for', '04-welcome',
    '05-what-we-do-best', '06-audit-band', '07-comparison', '08-growth-system',
    '09-dactarbabu', '10-journey-glance', '11-projects', '12-ceo-video',
    '13-testimonials', '14-awards', '15-instagram', '16-faq', '17-map', '18-contact-form',
];
foreach ($sections as $section) {
    include __DIR__ . "/sections/{$section}.php";
}
