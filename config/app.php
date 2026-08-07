<?php

declare(strict_types=1);

use App\Core\Env;

return [
    'name' => Env::get('APP_NAME', 'MfunL'),
    'env' => Env::get('APP_ENV', 'production'),
    'debug' => (bool) Env::get('APP_DEBUG', false),
    'url' => rtrim((string) Env::get('APP_URL', ''), '/'),
    'timezone' => Env::get('APP_TIMEZONE', 'Asia/Kolkata'),
    'key' => Env::get('APP_KEY', ''),
];
