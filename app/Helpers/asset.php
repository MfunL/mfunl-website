<?php

declare(strict_types=1);

if (!function_exists('asset')) {
    /**
     * Versions a static asset URL with its file mtime for cache-busting.
     */
    function asset(string $path): string
    {
        $full = dirname(__DIR__, 2) . '/public/' . ltrim($path, '/');
        $version = is_file($full) ? filemtime($full) : time();
        return '/' . ltrim($path, '/') . '?v=' . $version;
    }
}
