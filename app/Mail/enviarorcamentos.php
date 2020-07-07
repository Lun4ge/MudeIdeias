<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class enviarorcamentos extends Mailable
{
    use Queueable, SerializesModels;
    public $detalhes;

    public function __construct()
    {
        //
    }

    public function build()
    {
        return $this->subject("teste1")->view('admin.mail');
    }
}
