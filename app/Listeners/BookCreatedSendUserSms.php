<?php

namespace App\Listeners;

use App\Events\BookCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kavenegar\KavenegarApi;

class BookCreatedSendUserSms implements ShouldQueue
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
     * @param BookCreatedEvent $event
     * @return void
     */
    public function handle(BookCreatedEvent $event)
    {
        $client = new KavenegarApi(env("KAVEH_NEGAR_API_KEY"));
        $client->Send(env("SENDER_MOBILE"), $event->user->phone, "hello " . $event->user->name . "\n your book named " . $event->book->name . " created");
    }
}
