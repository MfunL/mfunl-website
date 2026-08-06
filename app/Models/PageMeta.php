<?php

declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

final class PageMeta extends Model
{
    protected static string $table = 'page_meta';

    public static function findByRoute(string $route): ?array
    {
        $stmt = static::db()->prepare('SELECT * FROM page_meta WHERE route = :route LIMIT 1');
        $stmt->execute(['route' => $route]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
