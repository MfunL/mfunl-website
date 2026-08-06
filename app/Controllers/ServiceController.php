<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;
use App\Core\View;

final class ServiceController extends Controller
{
    public function show(array $routeMeta, string $slug): string
    {
        $seo = new Seo(
            title: $routeMeta['title'],
            description: $routeMeta['description'],
            path: "/{$slug}/"
        );

        $data = [
            'seo' => $seo,
            'bodyClass' => "page-service-{$slug}",
            'title' => $routeMeta['title'],
            'crumbs' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'What We Do', 'url' => '/what-we-do/'],
                ['label' => ucwords(str_replace('-', ' ', $slug)), 'url' => "/{$slug}/"],
            ],
        ];

        $view = "pages/services/{$slug}";

        return View::exists($view)
            ? $this->view($view, $data)
            : $this->view('pages/_placeholder', $data);
    }
}
