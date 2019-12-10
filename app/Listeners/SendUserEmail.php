<?php

namespace App\Listeners;

use App\Book;
use App\Events\BookCreatedEvent;
use App\Mail\BookCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SendUserEmail
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
        $book = $event->book;
        Mail::to(Auth::user())->send(new BookCreated($book));
    }
}
