<?php

declare(strict_types=1);

namespace App\Core;

/**
 * SMTP-via-sockets mailer (no Composer dependency). Phase 3 wires this
 * into form submissions; for now it exposes the interface the rest of
 * the app codes against.
 */
final class Mailer
{
    private array $config;

    public function __construct()
    {
        $this->config = require dirname(__DIR__, 2) . '/config/mail.php';
    }

    public function send(string $to, string $subject, string $htmlBody): bool
    {
        if (($this->config['host'] ?? '') === '') {
            Logger::info('Mailer skipped (no SMTP host configured)', ['to' => $to, 'subject' => $subject]);
            return false;
        }

        // Phase 3: implement fsockopen SMTP conversation using $this->config.
        Logger::info('Mail queued', ['to' => $to, 'subject' => $subject]);
        return true;
    }

    public function notifyAdmin(string $subject, string $htmlBody): bool
    {
        return $this->send($this->config['admin_address'], $subject, $htmlBody);
    }
}
