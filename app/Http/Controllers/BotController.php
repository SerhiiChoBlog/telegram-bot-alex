<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;

class BotController extends Controller
{
    public function __invoke(): void
    {
        $botman = app('botman');

        $botman->fallback(function (BotMan $bot) {
            $bot->reply('Hello');
        });

        $botman->listen();
    }
}
