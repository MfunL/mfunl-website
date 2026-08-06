<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Renders a view file inside a layout. Views receive only $data — no
 * database or business logic is reachable from inside a view file.
 */
final class View
{
    public static function render(string $view, array $data = [], string $layout = 'main'): string
    {
        $viewPath = self::resolve("app/Views/{$view}.php");

        if ($viewPath === null) {
            throw new \RuntimeException("View not found: {$view}");
        }

        $content = self::capture($viewPath, $data);

        $layoutPath = self::resolve("app/Views/layouts/{$layout}.php");
        if ($layoutPath === null) {
            return $content;
        }

        return self::capture($layoutPath, array_merge($data, ['content' => $content]));
    }

    public static function partial(string $partial, array $data = []): string
    {
        $path = self::resolve("app/Views/partials/{$partial}.php");
        return $path ? self::capture($path, $data) : '';
    }

    public static function exists(string $view): bool
    {
        return self::resolve("app/Views/{$view}.php") !== null;
    }

    private static function resolve(string $relativePath): ?string
    {
        $full = dirname(__DIR__, 2) . '/' . $relativePath;
        return is_file($full) ? $full : null;
    }

    private static function capture(string $path, array $data): string
    {
        extract($data, EXTR_SKIP);
        ob_start();
        include $path;
        return ob_get_clean();
    }
}
