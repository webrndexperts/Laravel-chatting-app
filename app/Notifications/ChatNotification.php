<?php

use App\Events\StatusLiked;
use App\Listeners\SendChatNotification;
use App\Notifications\ChatNotification;
use Illuminate\Support\Facades\Notification;

class SendChatNotification
{
    public function handle(StatusLiked $event)
    {
        $recipient = $event->recipient;
        $message = $event->message;

        $recipient->notify(new ChatNotification($message));
		
	dd($recipient);	
    }
}