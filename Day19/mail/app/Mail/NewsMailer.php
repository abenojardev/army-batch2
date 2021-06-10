<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsMailer extends Mailable
{
    use Queueable, SerializesModels;

    protected $message, $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $email)
    {
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
