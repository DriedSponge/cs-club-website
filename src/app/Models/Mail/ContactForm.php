<?php

namespace App\Models\Mail;

use App\Models\ContactFormResponse;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\Object_;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     */
    public $data;

    public function __construct(ContactFormResponse $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@bhscsclub.com','BHS CS Club Contact Form - '.$this->data->Subject)
            ->replyTo($this->data->Email,$this->data->Name)
            ->view('email.contactform');
    }
}
