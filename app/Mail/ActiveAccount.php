<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActiveAccount extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $subject = 'account hatgwez.com';
        return $this->view('visitor.email')
            ->from($address, $name)
            ->subject('تم تفعيل بريدك بنجاح علي موقع هتجوز وجاهز للاستخدام');
    }
}
