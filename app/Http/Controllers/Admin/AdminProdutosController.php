<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Produto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutosRequest;

class AdminProdutosController extends Controller
{
    

    //mostrar todos os produtos
    public function index(){

        $produtos = Produto::paginate(3);

        return view("site.admin.painelProdutos", ['produtos'=>$produtos]);

    }

    // -------- PRODUTOS


    //Exibir editar produto
    public function editarProduto($id){

        $produto = Produto::find($id);
        return view('site.admin.editarProduto',['produto'=>$produto]);

    }

    //Exibir editar imagem do produto
    public function editarImagemProduto($id){

        $produto = Produto::find($id);
        return view('site.admin.editarImagemDoProduto',['produto'=>$produto]);
        
    }

    //Exibir criar novo produto
    public function criarProduto(){

        return view('site.admin.criarNovoProduto');

    }

    //Atualizando uma nova imagem para o produto
    public function atualizarImagemProduto(Request $request, $id){

        Validator::make($request->all(),['imagem'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();


        if($request->hasFile("imagem")){

            $produto = Produto::find($id);
          $exists = Storage::disk('local')->exists("public/produto_imagens/".$produto->imagem);

          //delete old image
          if($exists){
             Storage::delete('public/produto_imagens/'.$produto->imagem);

          }

          //upload new image
            $ext = $request->file('imagem')->getClientOriginalExtension(); //jpg

            $request->imagem->storeAs("produto_imagens/",$produto->imagem);

            $arrayAtualizar = array('imagem'=>$produto->imagem);
            DB::table('produtos')->where('id',$id)->update($arrayAtualizar);


            return redirect()->route("adminPainelProdutos");

        }else{

           $error = "Nenhuma imagem foi selecionada";
           return $error;

        }
    }

    //Atualizando novos dados no produto
    public function atualizarProduto(ProdutosRequest $request, $id){
	
        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $tipo = $request->input('tipo');
        $preco = $request->input('preco');
        $quantidade = $request->input('quantidade');
        $linha = $request->input('linha');
        
        $arrayAtualizar = array("nome"=>$nome, "descricao"=> $descricao,"tipo"=>$tipo,"preco"=>$preco, "linha"=>$linha, "quantidade"=>$quantidade);
        DB::table('produtos')->where('id', $id)->update($arrayAtualizar);
    
        return redirect()->route("adminPainelProdutos");
    
    }
    

    //Criando um novo produto no banco de dados
	public function criandoNovoProduto(ProdutosRequest $request){

        $nome = $request->input('nome');
        $descricao = $request->input('descricao');
        $tipo = $request->input('tipo');
        $preco = $request->input('preco');
        $linha = $request->input('linha');
        $quantidade = $request->input('quantidade');

        Validator::make($request->all(),['imagem'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
        $ext = $request->file('imagem')->getClientOriginalExtension();
        $stringImagem = str_replace(" ", "", $request->input('nome'));

        $imagemNome = $stringImagem.".".$ext;
        $imagemCodificada = File::get($request->imagem);
        Storage::disk('local')->put('public/produto_imagens/'.$imagemNome, $imagemCodificada);

        $novoProdutoArray = array("nome"=>$nome, "descricao"=> $descricao, "tipo"=>$tipo, "preco"=>$preco, "imagem"=>$imagemNome, "linha"=>$linha, "quantidade"=>$quantidade);
        $criado = DB::table("produtos")->insert($novoProdutoArray);

        if($criado){

             return redirect()->route("adminPainelProdutos");

        }else{

            return "Produto não foi criado.";

        }

    }

    //Excluir um produto no banco de dados
    public function excluirProduto($id){

        $produto = Produto::find($id);
        $exists = Storage::disk('local')->exists("public/produto_imagens/".$produto->imagem);
                
                if($exists){
                
                    Storage::delete('public/produto_imagens/'.$produto->imagem);
                }
    
        Produto::destroy($id);
        return redirect()->route("adminPainelProdutos");
    }


    // -------- PEDIDOS


    //Painel dos Pedidos, mostrando todo o conteudo de pedidos
    public function painelPedidos(){

        $pedidos = DB::table('pedidos')->paginate(10);
        $pedidos_itens = DB::table('pedidos_itens');
        return view('site.admin.painelPedidos', ["pedidos" => $pedidos]);
        return view('site.admin.painelPedidos', ["pedidos_itens" => $pedidos_itens]);

    }

    //Excluir algum pedido 
    public function excluirPedido(Request $request, $id){

        $excluido = DB::table('pedidos')->where("pedido_id", $id)->delete();
    
        if($excluido){
        
            return redirect()->back()->with('statusExclusãoPedido', 'Pedido '.$id.' excluído com sucesso');
        
        }else{
    
            return redirect()->back()->with('statusExclusãoPedido', 'Pedido '.$id.' não foi excluído com sucesso');
    
        }
    
    }

    //Mostrar pag de atualização de pedido
    public function editarPedido($pedido_id){

        $pedido =  DB::table('pedidos')->where("pedido_id",$pedido_id)->get();
        
          return view('site.admin.atualizarPedido',['pedido'=>$pedido[0]]);


    }
    

    //Atualizar campos de pedidos
    public function atualizarPedido(Request $request, $pedido_id){

       $data =  $request->input('data');
       $status = $request->input('status');
       $del_data =  $request->input('del_data');
       $preco = $request->input('preco');

       $arrayAtualizar = array("status"=>$status, "data"=>$data, "del_data"=> $del_data, "preco"=>$preco);
        DB::table('pedidos')->where('pedido_id',$pedido_id)->update($arrayAtualizar);

        return redirect()->route("painelPedidos");

    }


    // -------- USUÁRIOS/CLIENTES


    //Painel dos Usuarios, mostrando todo o conteudo dos Usuarios
    public function painelUsuarios(){

        $users = DB::table('users')->paginate(10);
        return view('site.admin.painelUsuarios', ["users" => $users]);


    }

    //Excluir algum usuario
    public function excluirUsuario(Request $request, $id){

        $excluido = DB::table('users')->where("id", $id)->delete();
    
        if($excluido){
        
            return redirect()->back()->with('statusExclusãoUsuario', 'Usuario '.$id.' excluído com sucesso');
        
        }else{
    
            return redirect()->back()->with('statusExclusãoUsuario', 'Usuario '.$id.' não foi excluído com sucesso');
    
        }
    
    }

    //Mostrar pag de atualização de usuario
    public function editarUsuario($pedido_id){

        $users =  DB::table('users')->where("id",$id)->get();
        
          return view('site.admin.atualizarUsuario',['users'=>$users[0]]);


    }
    

    //Atualizar campos de pedidos
    public function atualizarUsuario(Request $request, $id){

       $name =  $request->input('name');
       
       $arrayAtualizar = array("name"=>$name);
        DB::table('users')->where('id',$id)->update($arrayAtualizar);

        return redirect()->route("painelUsuarios");

    }
    
}
