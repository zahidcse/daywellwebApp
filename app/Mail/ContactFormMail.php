<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $usermessage;

    public function __construct($name, $email, $usermessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->usermessage = $usermessage;
    }

    public function build()
    {
        return $this->view('emails.contact-form-email')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'usermessage' => $this->usermessage,
                    ]);
    }
}
