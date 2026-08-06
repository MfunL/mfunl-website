<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;

final class BlogController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: $routeMeta['title'], description: $routeMeta['description'], path: '/blog/');

        return $this->view('pages/_placeholder', [
            'seo' => $seo,
            'bodyClass' => 'page-blog',
            'title' => $routeMeta['title'],
            'crumbs' => [['label' => 'Home', 'url' => '/'], ['label' => 'Blog', 'url' => '/blog/']],
        ]);
    }
}
