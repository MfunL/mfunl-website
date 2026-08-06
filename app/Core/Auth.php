<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Admin session guard. Login/lockout logic lives in Admin\AuthController
 * (Phase 4) — this class only answers "is someone logged in".
 */
final class Auth
{
    private const KEY = 'admin_user_id';

    public static function check(): bool
    {
        return Session::has(self::KEY);
    }

    public static function id(): ?int
    {
        $id = Session::get(self::KEY);
        return $id !== null ? (int) $id : null;
    }

    public static function login(int $adminUserId): void
    {
        Session::regenerate();
        Session::set(self::KEY, $adminUserId);
    }

    public static function logout(): void
    {
        Session::remove(self::KEY);
        Session::destroy();
    }

    public static function requireLogin(): void
    {
        if (!self::check()) {
            Response::redirect('/admin/login/');
        }
    }
}
