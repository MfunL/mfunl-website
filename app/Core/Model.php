<?php

declare(strict_types=1);

namespace App\Core;

use PDO;

/**
 * Minimal active-record-ish base. Every query is a prepared statement.
 */
abstract class Model
{
    protected static string $table = '';

    protected static function db(): PDO
    {
        return Database::connection();
    }

    public static function find(int $id): ?array
    {
        $stmt = static::db()->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id LIMIT 1');
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function all(string $orderBy = 'id DESC'): array
    {
        $stmt = static::db()->query('SELECT * FROM ' . static::$table . ' ORDER BY ' . $orderBy);
        return $stmt->fetchAll();
    }

    public static function insert(array $attributes): int
    {
        $columns = array_keys($attributes);
        $placeholders = array_map(static fn (string $c): string => ":{$c}", $columns);

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            static::$table,
            implode(', ', $columns),
            implode(', ', $placeholders)
        );

        $stmt = static::db()->prepare($sql);
        $stmt->execute($attributes);

        return (int) static::db()->lastInsertId();
    }

    public static function update(int $id, array $attributes): bool
    {
        $set = implode(', ', array_map(static fn (string $c): string => "{$c} = :{$c}", array_keys($attributes)));
        $sql = 'UPDATE ' . static::$table . " SET {$set} WHERE id = :id";

        $stmt = static::db()->prepare($sql);
        return $stmt->execute([...$attributes, 'id' => $id]);
    }
}
