<?php

declare(strict_types=1);

namespace App\Services;

class QrCodeService implements Service
{
    private const URL = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=';

    public function __construct(private string $url)
    {
    }

    public function handle(): string
    {
        return self::URL . $this->url;
    }
}
