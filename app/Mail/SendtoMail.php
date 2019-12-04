<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendtoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $Subject;
    public $body;
    public $img;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Subject,$body,$img)
    {    
        $this->Subject=$Subject;
        $this->body=$body;
        $this->img=$img;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pasport.messageTo')->from('zinebkamal073@gmail.com');
    }
}
