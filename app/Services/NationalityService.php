<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NationalityService implements Service
{
    private const URL = 'https://api.nationalize.io/?name=';

    public function __construct(private string $first_name)
    {
    }

    public function handle(): array
    {
        return Http::get(self::URL . $this->first_name)->json();
    }
}
