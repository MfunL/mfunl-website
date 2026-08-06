<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;
use App\Core\View;

final class PageController extends Controller
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
            'bodyClass' => "page-{$slug}",
            'title' => $routeMeta['title'],
            'crumbs' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => $this->label($slug), 'url' => "/{$slug}/"],
            ],
        ];

        $view = "pages/{$slug}";

        return View::exists($view)
            ? $this->view($view, $data)
            : $this->view('pages/_placeholder', $data);
    }

    private function label(string $slug): string
    {
        return ucwords(str_replace('-', ' ', $slug));
    }
}
