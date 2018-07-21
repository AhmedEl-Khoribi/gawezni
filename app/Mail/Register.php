<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Register extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'gtsawsolutions@gmail.com';
        $name = 'hatgwez.com';
        $user = $this->user;
        $subject = 'account hatgwez.com';
        return $this->view('visitor.emailR')
            ->from($address, $name)
            ->with('user', $user)
            ->subject('لقد قمت بالتسجيل علي موقع هتجوز بنجاح');
    }
}
