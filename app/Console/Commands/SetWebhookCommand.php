<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SetWebhookCommand extends Command
{
    protected $signature = 'bot:set-webhook {url}';
    protected $description = 'Sets the telegram webhook to the given URL';

    public function handle(): void
    {
        $token = config('botman.telegram_token');
        $url = $this->argument('url');

        $response = Http::post("https://api.telegram.org/bot$token/setWebhook", compact('url'));

        $this->info($response->json('description', 'Unknown error'));
    }
}
