<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChatNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
  public function handle(NewChatMessage $event)
{
    $recipient = User::find($event->chatMessage->recipient_id);
    $recipient->notify(new ChatNotification($event->chatMessage));
}
}

