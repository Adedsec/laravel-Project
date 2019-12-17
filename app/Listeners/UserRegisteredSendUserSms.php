<?php

namespace App\Listeners;

use App\Events\UserRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Kavenegar\KavenegarApi;

class UserRegisteredSendUserSms implements ShouldQueue
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
     * @param UserRegisteredEvent $event
     * @return void
     */
    public function handle(UserRegisteredEvent $event)
    {
        $client = new KavenegarApi(env("KAVEH_NEGAR_API_KEY"));
        $client->Send(env("SENDER_MOBILE"), $event->user->phone, "hello " . $event->user->name . "\n WellCome to book store");
    }
}
