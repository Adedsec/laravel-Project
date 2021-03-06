<?php

namespace App\Providers;

use App\Events\BookCreatedEvent;
use App\Events\UserRegisteredEvent;
use App\Listeners\BookCreatedSendUserSms;
use App\Listeners\BookCreatedSendUserEmail;
use App\Listeners\UserRegisteredSendUserEmail;
use App\Listeners\UserRegisteredSendUserSms;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        BookCreatedEvent::class => [
            BookCreatedSendUserSms::class,
            BookCreatedSendUserEmail::class
        ],
        UserRegisteredEvent::class => [
            UserRegisteredSendUserSms::class,
            UserRegisteredSendUserEmail::class
        ]

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
