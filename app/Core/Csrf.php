<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Per-session CSRF token. Call field() inside every <form>, verify() on submit.
 */
final class Csrf
{
    private const KEY = '_csrf_token';

    public static function token(): string
    {
        if (!Session::has(self::KEY)) {
            Session::set(self::KEY, bin2hex(random_bytes(32)));
        }

        return Session::get(self::KEY);
    }

    public static function field(): string
    {
        $token = htmlspecialchars(self::token(), ENT_QUOTES, 'UTF-8');
        return "<input type=\"hidden\" name=\"csrf_token\" value=\"{$token}\">";
    }

    public static function verify(?string $token): bool
    {
        return is_string($token) && hash_equals(self::token(), $token);
    }

    public static function rotate(): void
    {
        Session::set(self::KEY, bin2hex(random_bytes(32)));
    }
}
