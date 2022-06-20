<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GeneralMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $from;
    public $subject;

    public function __construct($subject, $message = [], $from = ""){
        $this->subject = $subject;
        $this->message = $message;
        $this->from = $from;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    // ->from($this->from ?? env('MAIL_FROM_ADDRESS'), "")
                    ->view('emails.general', [
                        'details' => $this->message
                    ]);
    }
}
