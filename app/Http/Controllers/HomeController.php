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

    //Exibir editar perfil do usuário
    public function editarPerfil(User $user){

        return view('site.editarPerfil', compact('user'));

    }

    //Exibir editar imagem do usuário
    public function editarImagemUsuario(){

        return view('site.editarImagemPerfil');
        
    }


    //Atualizando novos dados do usuário
    public function atualizarPerfil(User $user){

        request()->validate([
            'name' => 'required',
            'login' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'datanascimento' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'rua' => 'required',
            'bairro' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'cep' => 'required',
            'celular' => 'required'
            
        ]);

        $user->update(request()->only('name', 'login', 'email', 'cpf', 'datanascimento', 'estado', 'cidade', 'rua', 'bairro', 'numero', 'complemento', 'cep', 'celular'));

        return redirect()->route('perfilUsuario');
    }


    

    //Atualizando uma nova imagem para o produto
    public function atualizarImagemUsuario(Request $request, $id){

        Validator::make($request->all(),['imagem'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();

        if($request->hasFile("imagem")){
    
            $produto = Produto::find($id);
            $exists = Storage::disk('local')->exists("public/produto_imagens/".$produto->imagem);
            
            //Excluir imagem antiga
            if($exists){
            
                Storage::delete('public/produto_imagens/'.$produto->imagem);
            }
        
            //Carregar nova imagem
            $ext = $request->file('imagem')->getClientOriginalExtension();
        
            $request->imagem->storeAs('public/produto_imagens/',$produto->imagem);
            
            $arrayAtualizar = array('imagem'=>$produto->imagem);
            DB::table('produtos')->where('id', $id)->update($arrayAtualizar);

            return redirect()->route("adminPainelProdutos");
        
        }else{
            
            $error = "Nenhuma imagem foi selecionada";
            return $error;

        }
    }
}
