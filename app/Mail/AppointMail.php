<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($hit)
    {
        $this->number = $hit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $new = $this->number;
        return $this->markdown('emails.Appoint.Appoint-form',compact('new'));
    }
}
