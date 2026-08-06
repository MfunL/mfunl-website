<?php

declare(strict_types=1);

/**
 * Interactive CLI to create the first super_admin user.
 * Usage: php database/create-admin.php
 */

require dirname(__DIR__) . '/vendor_autoload.php';

use App\Core\Database;
use App\Core\Env;

Env::load(dirname(__DIR__) . '/.env');

if (PHP_SAPI !== 'cli') {
    exit('This script must be run from the command line.' . PHP_EOL);
}

fwrite(STDOUT, 'Admin name: ');
$name = trim((string) fgets(STDIN));

fwrite(STDOUT, 'Admin email: ');
$email = trim((string) fgets(STDIN));

fwrite(STDOUT, 'Admin password (input will be visible in this basic prompt): ');
$password = trim((string) fgets(STDIN));

if ($name === '' || $email === '' || strlen($password) < 8) {
    exit('Name, email and an 8+ character password are all required.' . PHP_EOL);
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = Database::connection()->prepare(
    'INSERT INTO admin_users (name, email, password_hash, role, is_active) VALUES (:name, :email, :hash, :role, 1)'
);
$stmt->execute([
    'name' => $name,
    'email' => $email,
    'hash' => $hash,
    'role' => 'super_admin',
]);

fwrite(STDOUT, "Admin user '{$email}' created." . PHP_EOL);
