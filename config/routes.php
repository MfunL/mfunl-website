<?php

declare(strict_types=1);

use App\Controllers\AudienceController;
use App\Controllers\BlogController;
use App\Controllers\CareerController;
use App\Controllers\ContactController;
use App\Controllers\HomeController;
use App\Controllers\LocationController;
use App\Controllers\PageController;
use App\Controllers\ServiceController;
use App\Controllers\SitemapController;
use App\Controllers\Admin\ApplicationController as AdminApplicationController;
use App\Controllers\Admin\AuthController as AdminAuthController;
use App\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Controllers\Admin\LeadController as AdminLeadController;
use App\Controllers\Admin\SettingsController as AdminSettingsController;

/**
 * Single source of truth: route URI -> controller/action/view/SEO meta.
 * Adding a page later is one array entry (plus its view file) — see
 * README "How to add a page" for the walkthrough.
 *
 * 'group' drives sitemap.xml section splitting (pages/services/audiences/locations/posts).
 */

$routes = [
    '/' => [
        'controller' => HomeController::class,
        'action' => 'index',
        'name' => 'home',
        'group' => 'pages',
        'title' => 'Best Healthcare Digital Marketing Agency in Kolkata | MfunL',
        'description' => 'We help more patients discover your healthcare services in Kolkata with smart digital marketing strategies. Call us at 8336920676 and grow your patient base.',
    ],
];

// ---------------------------------------------------------------------
// Core / static pages
// ---------------------------------------------------------------------
$pages = [
    'about' => ['About Us', 'Meet the team behind MfunL and our healthcare-only approach to digital marketing.'],
    'what-we-do' => ['What We Do', 'The full range of healthcare digital marketing services MfunL delivers, from SEO to paid ads.'],
    'who-we-serve' => ['Who We Serve', 'Hospitals, clinics, medical practitioners and diagnostic centres MfunL partners with.'],
    'pricing' => ['Pricing', 'Digital marketing packages and pricing for healthcare providers, from MfunL.'],
    'healthcare-case-studies' => ['Case Studies', 'Real results MfunL has delivered for hospitals, clinics and practitioners.'],
    'career' => ['Careers', 'Current openings at MfunL and how to apply.'],
    'testimonials' => ['Testimonials', 'What healthcare clients say about working with MfunL.'],
    'contact' => ['Contact Us', 'Get in touch with MfunL for a free healthcare marketing consultation.'],
    'blog' => ['Blog', 'Healthcare marketing insights, guides and updates from MfunL.'],
    'our-locations' => ['Our Locations', 'Cities where MfunL supports healthcare providers with local marketing.'],
    'events' => ['Events', 'Events, webinars and appearances featuring the MfunL team.'],
    'awards' => ['Awards & Recognition', 'Industry awards and recognition earned by MfunL.'],
    'tv-channels' => ['TV Coverage', 'MfunL and its clients as featured on television.'],
    'e-papers' => ['E-Paper Coverage', 'MfunL in the digital press.'],
    'news-papers' => ['Newspaper Coverage', 'MfunL in print media.'],
    'digital-marketing-2026' => ['Digital Marketing in 2026', 'What healthcare providers need to know about digital marketing trends in 2026.'],
    'privacy-policy' => ['Privacy Policy', 'How MfunL collects, uses and protects your data.'],
    'terms-condition' => ['Terms & Conditions', 'Terms and conditions for using the MfunL website and services.'],
];

foreach ($pages as $slug => [$title, $description]) {
    $routes["/{$slug}/"] = [
        'controller' => PageController::class,
        'action' => 'show',
        'params' => ['slug' => $slug],
        'name' => $slug,
        'group' => 'pages',
        'title' => "{$title} | MfunL",
        'description' => $description,
    ];
}

// Controller-backed core pages (override generic PageController above)
$routes['/contact/']['controller'] = ContactController::class;
$routes['/contact/']['action'] = 'index';
$routes['/blog/']['controller'] = BlogController::class;
$routes['/blog/']['action'] = 'index';
$routes['/blog/']['group'] = 'posts';
$routes['/career/']['controller'] = CareerController::class;
$routes['/career/']['action'] = 'index';

// Form submission endpoints + sitemap (not part of the 68-page site tree)
$routes['/contact/submit/'] = [
    'controller' => ContactController::class,
    'action' => 'submit',
    'name' => 'contact.submit',
    'group' => 'admin',
    'noindex' => true,
];
$routes['/career/apply/'] = [
    'controller' => CareerController::class,
    'action' => 'apply',
    'name' => 'career.apply',
    'group' => 'admin',
    'noindex' => true,
];
$routes['/sitemap.xml'] = [
    'controller' => SitemapController::class,
    'action' => 'index',
    'name' => 'sitemap.index',
    'group' => 'admin',
    'noindex' => true,
];
$routes['/sitemap-{group}.xml'] = [
    'controller' => SitemapController::class,
    'action' => 'group',
    'name' => 'sitemap.group',
    'group' => 'admin',
    'noindex' => true,
];

// ---------------------------------------------------------------------
// Services — /what-we-do/ children
// ---------------------------------------------------------------------
$services = [
    'build-your-brand' => 'Build Your Brand',
    'medical-content-creation' => 'Medical Content Creation',
    'healthcare-social-media-marketing' => 'Healthcare Social Media Marketing',
    'patient-lead-generation' => 'Patient Lead Generation',
    'healthcare-seo' => 'Healthcare SEO',
    'healthcare-google-ads' => 'Healthcare Google Ads',
    'healthcare-meta-ads' => 'Healthcare Meta Ads',
    'healthcare-website-design' => 'Healthcare Website Design',
    'patient-conversion-management' => 'Patient Conversion Management',
    'online-reputation-management' => 'Online Reputation Management',
];

foreach ($services as $slug => $label) {
    $routes["/{$slug}/"] = [
        'controller' => ServiceController::class,
        'action' => 'show',
        'params' => ['slug' => $slug],
        'name' => "service.{$slug}",
        'group' => 'services',
        'title' => "{$label} for Healthcare | MfunL",
        'description' => "{$label} built for hospitals, clinics and medical practitioners by MfunL's healthcare-only marketing team.",
    ];
}

// ---------------------------------------------------------------------
// Audiences — /who-we-serve/ children
// ---------------------------------------------------------------------
$audiences = [
    'hospitals' => 'Hospitals',
    'general-hospitals' => 'General Hospitals',
    'multispecialty-hospitals' => 'Multispecialty Hospitals',
    'superspecialty-hospitals' => 'Superspecialty Hospitals',
    'daycare-hospitals' => 'Daycare Hospitals',
    'eye-hospitals' => 'Eye Hospitals',
    'cancer-hospitals' => 'Cancer Hospitals',
    'nursing-homes' => 'Nursing Homes',
    'clinics' => 'Clinics',
    'superspecialty-clinics' => 'Superspecialty Clinics',
    'multispecialty-clinics' => 'Multispecialty Clinics',
    'dental-clinics' => 'Dental Clinics',
    'aesthetic-clinics' => 'Aesthetic & Wellness Clinics',
    'ayurvedic-clinics' => 'Ayurvedic Clinics',
    'fertility-ivf-clinic' => 'Fertility & IVF Clinics',
    'hearing-aid-centres' => 'Hearing Aid Centres',
    'medical-practitioners' => 'Medical Practitioners',
    'general-surgeons' => 'General Surgeons',
    'pediatric-surgeons' => 'Pediatric Surgeons',
    'cosmetic-surgeons' => 'Cosmetic Surgeons',
    'vascular-surgeons' => 'Vascular Surgeons',
    'neuro-surgeons' => 'Neurosurgeons',
    'onco-surgeons' => 'Onco Surgeons',
    'gi-surgeons' => 'GI Surgeons',
    'ortho-surgeons' => 'Ortho Surgeons',
    'laparoscopic-surgeons' => 'Laparoscopic Surgeons',
    'ent-surgeons' => 'ENT Surgeons',
    'eye-surgeons' => 'Eye Surgeons',
    'uro-surgeons' => 'Uro-Surgeons',
    'cardio-surgeons' => 'Cardio-Surgeons',
    'dermatologists' => 'Dermatologists',
    'gynecologists' => 'Gynecologists',
    'sexologists' => 'Sexologists',
    'diagnostic-centres' => 'Diagnostic Centres',
];

foreach ($audiences as $slug => $label) {
    $uri = "/digital-marketing-for-{$slug}/";
    $routes[$uri] = [
        'controller' => AudienceController::class,
        'action' => 'show',
        'params' => ['slug' => $slug],
        'name' => "audience.{$slug}",
        'group' => 'audiences',
        'title' => "Digital Marketing for {$label} | MfunL",
        'description' => "Patient acquisition and reputation marketing for {$label}, from a healthcare-only agency.",
    ];
}

// ---------------------------------------------------------------------
// Locations
// ---------------------------------------------------------------------
$locations = [
    'hyderabad' => 'Hyderabad',
    'bhubaneswar' => 'Bhubaneswar',
    'ahmedabad' => 'Ahmedabad',
    'noida' => 'Noida',
    'guwahati' => 'Guwahati',
];

foreach ($locations as $slug => $label) {
    $uri = "/digital-marketing-agency-{$slug}/";
    $routes[$uri] = [
        'controller' => LocationController::class,
        'action' => 'show',
        'params' => ['slug' => $slug],
        'name' => "location.{$slug}",
        'group' => 'locations',
        'title' => "Healthcare Digital Marketing Agency in {$label} | MfunL",
        'description' => "MfunL's healthcare digital marketing services for hospitals and clinics in {$label}.",
    ];
}

// ---------------------------------------------------------------------
// Admin
// ---------------------------------------------------------------------
$routes['/admin/login/'] = [
    'controller' => AdminAuthController::class,
    'action' => 'showLogin',
    'name' => 'admin.login',
    'group' => 'admin',
    'title' => 'Admin Login',
    'noindex' => true,
];
$routes['/admin/logout/'] = [
    'controller' => AdminAuthController::class,
    'action' => 'logout',
    'name' => 'admin.logout',
    'group' => 'admin',
    'noindex' => true,
];
$routes['/admin/dashboard/'] = [
    'controller' => AdminDashboardController::class,
    'action' => 'index',
    'name' => 'admin.dashboard',
    'group' => 'admin',
    'title' => 'Dashboard',
    'noindex' => true,
    'auth' => true,
];
$routes['/admin/leads/'] = [
    'controller' => AdminLeadController::class,
    'action' => 'index',
    'name' => 'admin.leads',
    'group' => 'admin',
    'title' => 'Leads',
    'noindex' => true,
    'auth' => true,
];
$routes['/admin/leads/{id}/'] = [
    'controller' => AdminLeadController::class,
    'action' => 'show',
    'name' => 'admin.leads.show',
    'group' => 'admin',
    'title' => 'Lead Detail',
    'noindex' => true,
    'auth' => true,
];
$routes['/admin/applications/'] = [
    'controller' => AdminApplicationController::class,
    'action' => 'index',
    'name' => 'admin.applications',
    'group' => 'admin',
    'title' => 'Applications',
    'noindex' => true,
    'auth' => true,
];
$routes['/admin/export/'] = [
    'controller' => AdminLeadController::class,
    'action' => 'export',
    'name' => 'admin.export',
    'group' => 'admin',
    'noindex' => true,
    'auth' => true,
];
$routes['/admin/settings/'] = [
    'controller' => AdminSettingsController::class,
    'action' => 'index',
    'name' => 'admin.settings',
    'group' => 'admin',
    'title' => 'Settings',
    'noindex' => true,
    'auth' => true,
];

return $routes;
