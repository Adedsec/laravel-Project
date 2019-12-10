<?php

namespace App\Listeners;

use App\Events\BookCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kavenegar\KavenegarApi;

class SendAdminSms
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
     * @param  BookCreatedEvent  $event
     * @return void
     */
    public function handle(BookCreatedEvent $event)
    {
        $client = new KavenegarApi(env("KAVEH_NEGAR_API_KEY"));
        $client->Send(env("SENDER_MOBILE"), env("RECIVER_MOBILE"), "hello from aref");
    }
}
