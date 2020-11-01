<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.perfil');
    }

    public function editarPerfil($id){

        $user = User::find($id);
        return view('site.editarPerfil',['user'=>$user]);

    }

     //Atualizando novos dados no produto
    public function atualizarPerfil(Request $request, $id){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $remember_token = $request->input('remember_token');
        $login = $request->input('login');
        $CPF = $request->input('CPF');
        $datanascimento = $request->input('datanascimento');
        $Estado = $request->input('Estado');
        $Cidade = $request->input('Cidade');
        $Rua = $request->input('Rua');
        $Bairro = $request->input('Bairro');
        $Numero = $request->input('Numero');
        $Complemento = $request->input('Complemento');
        $Cep = $request->input('Cep');
        $Celular = $request->input('Celular');
        $imagemperfil = $request->input('imagemperfil');
        
        $arrayAtualizar = array("name"=>$name, "email"=> $email, "password"=>$password, "remember_token"=>$remember_token, "login"=>$login,
                                "CPF"=>$CPF, "datanascimento"=>$datanascimento, "Estado"=>$Estado, "Cidade"=>$Cidade, "Rua"=>$Rua, 
                                "Bairro"=>$Bairro, "Numero"=>$Numero, "Complemento"=>$Complemento, "Cep"=>$Cep, "Celular"=>$Celular, 
                                "imagemperfil"=>$imagemperfil);
        DB::table('users')->where('id', $id)->update($arrayAtualizar);
    
        return redirect()->route("adminPainelProdutos");
    
    }
}
