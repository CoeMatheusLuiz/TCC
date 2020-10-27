<?php

namespace App\Email;

use App\Carrinho;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarEmailCriado extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Carrinho
     */
    public $carrinho;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Carrinho $carrinho){
    
        $this->carrinho = $carrinho;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('site.emails.enviarEmailCriado');
    }
}
