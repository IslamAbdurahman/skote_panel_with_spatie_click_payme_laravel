<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $mesaage;

    public function __construct($mesaage)
    {
        $this->mesaage = $mesaage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $otp_code = $this->mesaage;
        return $this->view('mails.gmail_message', compact('otp_code'))
            ->subject('Site OTP message.');
    }
}
