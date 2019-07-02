<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\HttpFoundation\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Mail')
                    ->from($this->email->email,$this->email->name)
                    ->to(config('shop.email'),'Của hàng Shoest')
                    ->view('email.contactmail');
    }
}
