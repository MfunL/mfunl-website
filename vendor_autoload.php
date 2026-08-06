<?php

declare(strict_types=1);

/**
 * PSR-4-ish autoloader for the App\ namespace. No Composer — see build
 * constraints (must run on plain shared cPanel hosting with zero build step).
 */
spl_autoload_register(static function (string $class): void {
    $prefix = 'App\\';

    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = substr($class, strlen($prefix));
    $path = __DIR__ . '/app/' . str_replace('\\', '/', $relative) . '.php';

    if (is_file($path)) {
        require $path;
    }
});

foreach (glob(__DIR__ . '/app/Helpers/*.php') as $helper) {
    require $helper;
}
