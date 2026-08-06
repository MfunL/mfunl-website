<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Seo;

final class ApplicationController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: 'Applications', description: 'MfunL admin applications.', path: '/admin/applications/', noindex: true);

        return $this->view('admin/applications-index', ['seo' => $seo, 'bodyClass' => 'admin-applications'], 'admin');
    }
}
