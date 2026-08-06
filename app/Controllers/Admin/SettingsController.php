<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Seo;

final class SettingsController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: 'Settings', description: 'MfunL admin settings.', path: '/admin/settings/', noindex: true);

        return $this->view('admin/settings', ['seo' => $seo, 'bodyClass' => 'admin-settings'], 'admin');
    }
}
