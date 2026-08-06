<?php

declare(strict_types=1);

use App\Core\Env;
use App\Core\Request;
use App\Core\Router;
use App\Core\Session;

// `php -S` (used for local review) routes every request through this
// front controller, including static assets. Apache's .htaccess already
// only forwards non-existent paths (RewriteCond !-f) — mirror that here
// so `php -S` behaves the same way for CSS/JS/images.
if (PHP_SAPI === 'cli-server') {
    $requestedPath = urldecode((string) parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    $requestedFile = __DIR__ . $requestedPath;
    if ($requestedPath !== '/' && is_file($requestedFile)) {
        return false;
    }
}

require dirname(__DIR__) . '/vendor_autoload.php';

Env::load(dirname(__DIR__) . '/.env');

$app = require dirname(__DIR__) . '/config/app.php';
date_default_timezone_set($app['timezone']);

ini_set('display_errors', $app['debug'] ? '1' : '0');
error_reporting(E_ALL);

set_exception_handler(static function (\Throwable $e) use ($app): void {
    \App\Core\Logger::error($e->getMessage(), ['trace' => $e->getTraceAsString()]);
    http_response_code(500);

    if ($app['debug']) {
        echo '<pre>' . htmlspecialchars((string) $e, ENT_QUOTES, 'UTF-8') . '</pre>';
        return;
    }

    require dirname(__DIR__) . '/app/Views/errors/500.php';
});

Session::start();

$router = new Router(new Request());
$router->dispatch();
