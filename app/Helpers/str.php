<?php

declare(strict_types=1);

if (!function_exists('e')) {
    function e(?string $value): string
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('slug_to_label')) {
    function slug_to_label(string $slug): string
    {
        return ucwords(str_replace('-', ' ', $slug));
    }
}

if (!function_exists('truncate')) {
    function truncate(string $text, int $length = 160): string
    {
        return mb_strlen($text) > $length ? mb_substr($text, 0, $length - 1) . '…' : $text;
    }
}
