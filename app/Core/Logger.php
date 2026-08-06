<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Flat-file logger writing to storage/logs/{channel}-{date}.log.
 */
final class Logger
{
    public static function log(string $channel, string $message, array $context = []): void
    {
        $dir = dirname(__DIR__, 2) . '/storage/logs';
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }

        $line = sprintf(
            '[%s] %s%s%s',
            date('Y-m-d H:i:s'),
            $message,
            $context ? ' ' . json_encode($context, JSON_UNESCAPED_SLASHES) : '',
            PHP_EOL
        );

        file_put_contents("{$dir}/{$channel}-" . date('Y-m-d') . '.log', $line, FILE_APPEND | LOCK_EX);
    }

    public static function error(string $message, array $context = []): void
    {
        self::log('error', $message, $context);
    }

    public static function info(string $message, array $context = []): void
    {
        self::log('info', $message, $context);
    }
}
