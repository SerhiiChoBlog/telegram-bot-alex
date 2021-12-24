<?php

declare(strict_types=1);

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class QrCodeConversation extends Conversation
{
    public function run(): void
    {
        $question = 'Send me the URL that you want to generate QR-code for';

        $this->ask($question, function (string $url): void {
            $response = $this->prepareResponse($url);

            $this->bot->reply($response);
            $this->bot->startConversation(new ButtonsConversation());
        });
    }

    private function prepareResponse(string $url): string
    {
        return "Thanks for the $url";
    }
}
