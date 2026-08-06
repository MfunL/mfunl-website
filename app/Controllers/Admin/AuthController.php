<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Auth;
use App\Core\Controller;
use App\Core\Response;
use App\Core\Seo;

/**
 * Phase 4 implements login throttling, lockout and password_verify against
 * admin_users. This stub proves the route + view exist.
 */
final class AuthController extends Controller
{
    public function showLogin(array $routeMeta): string
    {
        $seo = new Seo(title: 'Admin Login', description: 'MfunL admin login.', path: '/admin/login/', noindex: true);

        return $this->view('admin/login', ['seo' => $seo, 'bodyClass' => 'admin-login'], 'admin');
    }

    public function logout(array $routeMeta): never
    {
        Auth::logout();
        Response::redirect('/admin/login/');
    }
}
