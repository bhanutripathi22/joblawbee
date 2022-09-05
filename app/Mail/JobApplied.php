<?php

namespace App\Mail;

use App\JobOpening;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApplied extends Mailable
{
    use Queueable, SerializesModels;

    public $job;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(JobOpening $job, $subject)
    {
        $this->job = $job;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->markdown('emails.job.applied');
    }
}



