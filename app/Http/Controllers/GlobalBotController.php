<?php

namespace App\Http\Controllers;

use App\Conversations\ExampleConversation;
use App\Http\Controllers\Bot\BotController;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class GlobalBotController extends BotController
{
    public function __invoke()
    {
        // You can access the botman object with this line
        $botman = $this->botman;
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                // Start a conversation
                $botman->startConversation(new ExampleConversation());
            }
            if($message=='hello'){
                $botman->reply("hello how can i help you");
            }
            if($message=='how i enroll with the school'){
                $botman->reply("its easy i can guide you");
            }
            if($message=='please help me'){
                $botman->reply("sure , first you have to register with our system");
            }
            else {
                $botman->reply("....");
            }
        });
   
        $botman->listen();
    }
}
