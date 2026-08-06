<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;
use App\Core\View;

final class LocationController extends Controller
{
    public function show(array $routeMeta, string $slug): string
    {
        $seo = new Seo(
            title: $routeMeta['title'],
            description: $routeMeta['description'],
            path: "/digital-marketing-agency-{$slug}/"
        );

        $data = [
            'seo' => $seo,
            'bodyClass' => "page-location-{$slug}",
            'title' => $routeMeta['title'],
            'crumbs' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'Our Locations', 'url' => '/our-locations/'],
                ['label' => ucwords(str_replace('-', ' ', $slug)), 'url' => "/digital-marketing-agency-{$slug}/"],
            ],
        ];

        $view = "pages/locations/{$slug}";

        return View::exists($view)
            ? $this->view($view, $data)
            : $this->view('pages/_placeholder', $data);
    }
}
