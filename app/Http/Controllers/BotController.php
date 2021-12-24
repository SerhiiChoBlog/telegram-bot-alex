<?php

namespace App\Http\Controllers;

use App\Conversations\ButtonsConversation;
use BotMan\BotMan\BotMan;

class BotController extends Controller
{
    public function __invoke(): void
    {
        $botman = app('botman');

        $botman->fallback(function (BotMan $bot) {
            $bot->startConversation(new ButtonsConversation());
        });

        $botman->listen();
    }
}
