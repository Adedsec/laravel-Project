<?php

namespace App\Mail;

use App\Book;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $book;
    Public $user;

    /**
     * Create a new message instance.
     *
     * @param Book $book
     * @param User $user
     */
    public function __construct(Book $book, User $user)
    {
        $this->book = $book;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.books.created');
    }
}
