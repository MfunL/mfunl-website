<?php

declare(strict_types=1);

if (!function_exists('seo_config')) {
    function seo_config(): array
    {
        static $config = null;
        $config ??= require dirname(__DIR__, 2) . '/config/seo.php';
        return $config;
    }
}
