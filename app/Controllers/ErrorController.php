<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Seo;

final class ErrorController extends Controller
{
    public function notFound(): string
    {
        $seo = new Seo(title: 'Page Not Found | MfunL', description: 'The page you are looking for could not be found.', path: '/404/', noindex: true);

        return $this->view('errors/404', ['seo' => $seo, 'bodyClass' => 'page-404']);
    }

    public function serverError(): string
    {
        $seo = new Seo(title: 'Server Error | MfunL', description: 'Something went wrong.', path: '/500/', noindex: true);

        return $this->view('errors/500', ['seo' => $seo, 'bodyClass' => 'page-500']);
    }
}
