<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Csrf;
use App\Core\Response;
use App\Core\Seo;
use App\Core\Session;
use App\Core\Validator;

final class CareerController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: $routeMeta['title'], description: $routeMeta['description'], path: '/career/');

        return $this->view('pages/career', [
            'seo' => $seo,
            'bodyClass' => 'page-career',
            'title' => $routeMeta['title'],
            'crumbs' => [['label' => 'Home', 'url' => '/'], ['label' => 'Careers', 'url' => '/career/']],
        ]);
    }

    /**
     * Phase 3: validate, store CV under public/uploads, insert into
     * career_applications, notify admin. For now: CSRF/honeypot check + PRG.
     */
    public function apply(array $routeMeta): never
    {
        if (!$this->request->isPost() || !Csrf::verify($this->request->string('csrf_token'))) {
            Response::redirect('/career/');
        }

        if ($this->request->string('website') !== '') {
            Response::redirect('/career/');
        }

        $validator = Validator::make($this->request->all(), [
            'name' => 'required|max:120',
            'email' => 'required|email',
            'phone' => 'required|phone',
            'position' => 'required',
        ]);

        if ($validator->fails()) {
            Session::flash('errors', $validator->errors());
            Response::redirect('/career/#apply');
        }

        Session::flash('success', 'Thanks for applying — we will review your CV and get back to you.');
        Response::redirect('/career/');
    }
}
