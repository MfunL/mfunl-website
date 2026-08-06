<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;
use App\Core\View;

final class AudienceController extends Controller
{
    public function show(array $routeMeta, string $slug): string
    {
        $seo = new Seo(
            title: $routeMeta['title'],
            description: $routeMeta['description'],
            path: "/digital-marketing-for-{$slug}/"
        );

        $data = [
            'seo' => $seo,
            'bodyClass' => "page-audience-{$slug}",
            'title' => $routeMeta['title'],
            'crumbs' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'Who We Serve', 'url' => '/who-we-serve/'],
                ['label' => ucwords(str_replace('-', ' ', $slug)), 'url' => "/digital-marketing-for-{$slug}/"],
            ],
        ];

        $view = "pages/audiences/{$slug}";

        return View::exists($view)
            ? $this->view($view, $data)
            : $this->view('pages/_placeholder', $data);
    }
}
