<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SolucionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $solucion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solucion)
    {
        $this->solucion = $solucion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.solucion');
    }
}
