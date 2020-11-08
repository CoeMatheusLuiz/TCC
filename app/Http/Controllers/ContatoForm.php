<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\EnviarEmail;

class ContatoForm extends Controller
{	
	private $nome;
	private $email;
	private $assunto;
	private $mensagem;

    public function __construct(Request $request){

    	$this->nome = $request->nome;
    	$this->email = $request->email;
    	$this->assunto = $request->assunto;
    	$this->mensagem = $request->mensagem;

    }

    public function enviarEmail(){
    	 $data = array(
            'nome' => $this->nome,
            'email' => $this->email,
            'assunto' => $this->assunto,
            'mensagem' => $this->mensagem
        );

        Mail::to( config('mail.from.address'))
            ->send(new EnviarEmail($data));

            return back()
                ->with('success', 'Sua mensagem foi enviada com sucesso, e logo será respondida!');
    }
}
