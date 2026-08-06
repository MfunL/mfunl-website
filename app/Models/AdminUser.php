<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

final class AdminUser extends Model
{
    protected static string $table = 'admin_users';

    public static function findByEmail(string $email): ?array
    {
        $stmt = static::db()->prepare('SELECT * FROM admin_users WHERE email = :email LIMIT 1');
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
