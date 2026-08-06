<?php

declare(strict_types=1);

if (!function_exists('url')) {
    function url(string $path = ''): string
    {
        $app = require dirname(__DIR__, 2) . '/config/app.php';
        return $app['url'] . '/' . ltrim($path, '/');
    }
}

if (!function_exists('is_active_route')) {
    function is_active_route(string $path): bool
    {
        $current = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
        return rtrim($current, '/') === rtrim($path, '/');
    }
}
