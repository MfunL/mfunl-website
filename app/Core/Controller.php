<?php

declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    public function __construct(protected readonly Request $request)
    {
    }

    protected function view(string $view, array $data = [], string $layout = 'main'): string
    {
        return View::render($view, $data, $layout);
    }

    protected function redirect(string $url, int $status = 302): never
    {
        Response::redirect($url, $status);
    }

    protected function json(array $data, int $status = 200): never
    {
        Response::json($data, $status);
    }
}
