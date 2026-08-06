<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Csrf;
use App\Core\Response;
use App\Core\Seo;
use App\Core\Session;
use App\Core\Validator;

final class ContactController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: $routeMeta['title'], description: $routeMeta['description'], path: '/contact/');

        return $this->view('pages/_placeholder', [
            'seo' => $seo,
            'bodyClass' => 'page-contact',
            'title' => $routeMeta['title'],
            'crumbs' => [['label' => 'Home', 'url' => '/'], ['label' => 'Contact', 'url' => '/contact/']],
        ]);
    }

    /**
     * Handles every lead form on the site (homepage modals + contact section).
     * Phase 3 wires this into the `leads` table + Mailer; today it only
     * validates CSRF/honeypot and does the PRG redirect-with-flash dance.
     */
    public function submit(array $routeMeta): never
    {
        if (!$this->request->isPost() || !Csrf::verify($this->request->string('csrf_token'))) {
            Response::redirect('/contact/');
        }

        if ($this->request->string('website') !== '') {
            // Honeypot tripped — behave as if it succeeded, drop it silently.
            Response::redirect($this->request->string('page_url', '/') ?: '/');
        }

        $validator = Validator::make($this->request->all(), [
            'name' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|phone',
        ]);

        if ($validator->fails()) {
            Session::flash('errors', $validator->errors());
            Response::redirect($this->request->string('page_url', '/') ?: '/');
        }

        Session::flash('success', 'Thanks — we\'ve received your details and will call you back shortly.');
        Response::redirect($this->request->string('page_url', '/') ?: '/');
    }
}
