<?php

declare(strict_types=1);

namespace App\Conversations;

use App\Enums\BotButtons;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;

class ButtonsConversation extends Conversation
{
    public function run(): void
    {
        $keyboard = Keyboard::create()
            ->oneTimeKeyboard()
            ->type(Keyboard::TYPE_KEYBOARD)
            ->resizeKeyboard(true)
            ->addRow(KeyboardButton::create(BotButtons::NATIONALITY->value))
            ->addRow(KeyboardButton::create(BotButtons::QR_CODE->value));

        $this->ask('Choose the option', function (string $answer): void {
            $this->bot->reply("Your answer is $answer");
        }, $keyboard->toArray());
    }
}
