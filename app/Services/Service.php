<?php

declare(strict_types=1);

namespace App\Services;

interface Service
{
    public function handle(): mixed;
}
