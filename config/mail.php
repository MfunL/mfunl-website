<?php

declare(strict_types=1);

use App\Core\Env;

return [
    'host' => Env::get('MAIL_HOST', ''),
    'port' => (int) Env::get('MAIL_PORT', 587),
    'username' => Env::get('MAIL_USERNAME', ''),
    'password' => Env::get('MAIL_PASSWORD', ''),
    'encryption' => Env::get('MAIL_ENCRYPTION', 'tls'),
    'from_address' => Env::get('MAIL_FROM_ADDRESS', 'no-reply@mfunl.com'),
    'from_name' => Env::get('MAIL_FROM_NAME', 'MfunL'),
    'admin_address' => Env::get('MAIL_ADMIN_ADDRESS', 'info@mfunl.com'),
];
