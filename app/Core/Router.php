<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Exact-match + {param} route matching against config/routes.php.
 * Handles canonical host/https redirect, forced trailing slash, and 404s.
 */
final class Router
{
    private array $routes;
    private array $app;

    public function __construct(private readonly Request $request)
    {
        $this->routes = require dirname(__DIR__, 2) . '/config/routes.php';
        $this->app = require dirname(__DIR__, 2) . '/config/app.php';
    }

    public function dispatch(): void
    {
        $this->enforceCanonical();

        $path = $this->request->path;

        if ($path !== '/' && !str_ends_with($path, '/') && !str_contains(basename($path), '.')) {
            Response::redirect($path . '/' . $this->queryString(), 301);
        }

        [$meta, $params] = $this->match($path);

        if ($meta === null) {
            $this->renderNotFound();
            return;
        }

        if (!empty($meta['auth']) && !Auth::check()) {
            Response::redirect('/admin/login/');
            return;
        }

        /** @var Controller $controller */
        $controllerClass = $meta['controller'];
        $controller = new $controllerClass($this->request);
        $action = $meta['action'];

        $routeParams = array_merge($meta['params'] ?? [], $params);

        echo $controller->$action($meta, ...array_values($routeParams));
    }

    private function match(string $path): array
    {
        if (isset($this->routes[$path])) {
            return [$this->routes[$path], []];
        }

        foreach ($this->routes as $uri => $meta) {
            if (!str_contains($uri, '{')) {
                continue;
            }

            $pattern = '#^' . preg_replace('#\{(\w+)\}#', '(?P<$1>[^/]+)', $uri) . '$#';
            if (preg_match($pattern, $path, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                return [$meta, $params];
            }
        }

        return [null, []];
    }

    private function enforceCanonical(): void
    {
        if ($this->app['env'] !== 'production') {
            return;
        }

        $host = $_SERVER['HTTP_HOST'] ?? '';
        $canonicalHost = $this->app['canonical_host'];
        $wantsHttps = !$this->request->isHttps();
        $wantsHost = $host !== $canonicalHost && $host !== '';

        if ($wantsHttps || $wantsHost) {
            $target = 'https://' . $canonicalHost . $_SERVER['REQUEST_URI'];
            Response::redirect($target, 301);
        }
    }

    private function queryString(): string
    {
        $query = $_SERVER['QUERY_STRING'] ?? '';
        return $query !== '' ? "?{$query}" : '';
    }

    private function renderNotFound(): void
    {
        Response::notFound();
        $controller = new \App\Controllers\ErrorController($this->request);
        echo $controller->notFound();
    }
}
