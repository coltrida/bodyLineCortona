<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
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
        //return $this->view('mails.testemail')->with(['username' => 'coltrida']);  // se il to('mail') lo mettiamo nella rotta

        return $this->view('mails.testemail')     // se nella rotta non mettiamo il to('mail')
            ->with(['username' => 'coltrida'])
            ->to('coltricat75@gmail.com');
    }
}
