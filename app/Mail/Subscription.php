<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\JobOpening;

class Subscription extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    // public $job;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->job = $job;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Subscription: Welcome to Jobs Lawbee')->markdown('emails.subscription.subscription_email');
      
    }
}
