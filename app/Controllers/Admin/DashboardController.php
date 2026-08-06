<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Seo;

final class DashboardController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: 'Dashboard', description: 'MfunL admin dashboard.', path: '/admin/dashboard/', noindex: true);

        return $this->view('admin/dashboard', ['seo' => $seo, 'bodyClass' => 'admin-dashboard'], 'admin');
    }
}
