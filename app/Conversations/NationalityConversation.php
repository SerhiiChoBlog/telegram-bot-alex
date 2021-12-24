<?php

declare(strict_types=1);

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class NationalityConversation extends Conversation
{
    public function run(): void
    {
        $question = 'Tell me the first name that you want to predict the nationality for';

        $this->ask($question, function (string $name): void {
            $response = $this->prepareResponse($name);

            $this->bot->reply($response);
            $this->bot->startConversation(new ButtonsConversation());
        });
    }

    private function prepareResponse(string $name): string
    {
        return "Thanks $name";
    }
}
