<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Response;
use App\Core\Sitemap;

final class SitemapController extends Controller
{
    public function index(array $routeMeta): never
    {
        header('Content-Type: application/xml; charset=utf-8');
        echo Sitemap::index();
        exit;
    }

    public function group(array $routeMeta, string $group): never
    {
        header('Content-Type: application/xml; charset=utf-8');
        echo Sitemap::group($group);
        exit;
    }
}
