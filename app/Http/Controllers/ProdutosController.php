<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

use App\Email\EnviarEmailCriado;
use App\Produto;
use App\Carrinho;
use App\User;

class ProdutosController extends Controller{

    public function index(){
        
        //$produtos = [0=>["name"=>"Iphone", "categoria"=>"SmartPhone", "preco"=>1000]];

        $produtos = Produto::paginate(6);

        return view("site.loja", compact("produtos"));
    }


    public function pagListaDesejos(){

        $user_email = Auth::User()->email;
        $userListaDesejos = DB::table('lista_desejos')->where('user_email', $user_email)->get();

        foreach ($userListaDesejos as $key => $produto) {
            $produtoDetalhes = Produto::where('id', $produto->id)->first();
            $userListaDesejos[$key]->imagem = $produtoDetalhes->imagem;
        }

        return view('site.lista_desejos')->with(compact('userListaDesejos'));

    }

    //** Lista de Desejos **//

    public function AddListaDesejos(Request $request, $id){

        if(!Auth::check()){
            return redirect()->back()->with('info', 'Faça login para adicionar o produto à sua lista de desejos.');
        }
             $produto = Produto::find($id);

                $user_email = Auth::User()->email;
                $quantidade = 1;
                $created_at = Carbon::now();

                $contaListaDesejos = DB::table('lista_desejos')->where([ 'user_email'=>$user_email, 'id'=>$produto['id'] ])->count();

                if($contaListaDesejos > 0){

                        return redirect()->back()->with('flash_message_error', 'O produto já existe na lista de desejos!');

                }else{

                        DB::table('lista_desejos')->insert(['id'=>$produto['id'], 'nome'=>$produto['nome'], 'descricao'=>$produto['descricao'], 'preco'=>$produto['preco'], 'imagem'=>$produto['imagem'], 'tipo'=>$produto['tipo'], 'linha'=>$produto['linha'], 'user_email'=>$user_email, 'quantidade'=>$quantidade, 'created_at'=>$created_at]);

                    return redirect()->back()->with('info', 'O produto foi adicionado na lista de desejos.'); 

                }

    }


    //** CARRINHO **//

    public function AddProdutoAoCarrinho(Request $request, $id){

        /*$request->session()->forget("carrinho");
        $request->session()->flush();*/

        $prevCarrinho = $request->session()->get('carrinho');
        $carrinho = new Carrinho($prevCarrinho);
    
        $produto = Produto::find($id);
        $carrinho->addItem($id, $produto);
        $request->session()->put('carrinho', $carrinho);

        //dump($carrinho);

        return redirect()->route("loja");
    
    }

    public function MostrarCarrinho(){

        $carrinho = Session::get('carrinho');
        
        //carrinho não está vazio
        if($carrinho){
            return view('site.carrinhoprodutos',['carrinhoItens'=> $carrinho]);
            //dump($carrinho);

        //carrinho está vazio
        }else{
            return redirect()->route('loja');
            //echo "carrinho esta vazio";
        }    
    
    }

    public function DeletarItemDoCarrinho(Request $request, $id){

        $carrinho = $request->session()->get("carrinho");

        if(array_key_exists($id, $carrinho->itens)){
            
            unset($carrinho->itens[$id]);

        }

        $prevCarrinho = $request->session()->get("carrinho");
        $updatedCarrinho = new Carrinho($prevCarrinho);
        $updatedCarrinho->updatePrecoEQuantidade();

        $request->session()->put("carrinho", $updatedCarrinho);

        return redirect()->route('produtoscarrinho');

        }

        public function aumentarProduto(Request $request, $id){

            $prevCarrinho = $request->session()->get('carrinho');
            $carrinho = new Carrinho($prevCarrinho);
        
            $produto = Produto::find($id);
            $carrinho->addItem($id, $produto);
            $request->session()->put('carrinho', $carrinho);
        
            return redirect()->route("produtoscarrinho");

        }
        public function diminuirProduto(Request $request, $id){

            $prevCarrinho = $request->session()->get('carrinho');
            $carrinho = new Carrinho($prevCarrinho);
        
            if( $carrinho->itens[$id]['quantidade'] > 1){
                
                $produto = Produto::find($id);
                $carrinho->itens[$id]['quantidade'] = $carrinho->itens[$id]['quantidade'] - 1;
                $carrinho->itens[$id]['precoUnicoTotal'] = $carrinho->itens[$id]['quantidade'] * $produto['preco'];
                $carrinho->updatePrecoEQuantidade();
                $request->session()->put('carrinho', $carrinho);
            }else{
                
                return redirect()->route("produtoscarrinho");
                
            }

        }

        public function pesquisar(Request $request){

            $pesquisarTexto = $request->get('pesquisarTexto');
            $produtos = Produto::where('nome',"Like", $pesquisarTexto."%")->paginate(3);
            return view("site.loja", compact("produtos"));
            
        }

        //** CATEGORIAS **//

        public function colheresProdutos(){

            $produtos = DB::table('produtos')->where('tipo', "Colher")->get();
            return view("site.colheresProdutos", compact("produtos"));

        }

        public function garfosProdutos(){

            $produtos = DB::table('produtos')->where('tipo', "Garfo")->get();
            return view("site.loja", compact("produtos"));
            
        }
        
        //** PEDIDOS **//

        public function checkoutProdutos(){

            return view('site.checkoutprodutos');
            
        }

        public function criarPedido(){

            $carrinho = Session::get('carrinho');
            
            //carrinho não está vazio
            if($carrinho){
                $data = date('Y-m-d H:i:s');
                $newOrderArray = array("status"=>"em_espera", "data"=>$data, "del_data"=>$data, "preco"=>$carrinho->precoTotal);
                $pedido_criado = DB::table("pedidos")->insert($newOrderArray);
                $pedido_id = DB::getPdo()->lastInsertId();
        
                    foreach($carrinho->itens as $carrinho_item){
                        $item_id = $carrinho_item['data']['id'];
                        $item_nome = $carrinho_item['data']['nome'];
                        $item_preco = $carrinho_item['data']['preco'];
                        $novosItensNoPedidoAtual = array("item_id"=>$item_id, "pedido_id"=>$pedido_id, "item_nome"=>$item_nome, "item_preco"=>$item_preco);
                        $itens_pedidos_criados = DB::table("pedido_itens")->insert($novosItensNoPedidoAtual);
                    }
                
                //delete carrinho
                Session::forget("carrinho");
                Session::flush();
                return redirect()->route("loja")->withsuccess("Obrigado Por Nos Escolher");

            }else{

                return redirect()->route("loja");

            }
                    
        }

        public function criarNovoPedido(Request $request){
            $carrinho = Session::get('carrinho');
            $primeiro_nome = $request->input('primeiro_nome');	
            $ultimo_nome = $request->input('ultimo_nome');
            $rua = $request->input('rua');
            $bairro = $request->input('bairro');
            $numero = $request->input('numero');
            $complemento = $request->input('complemento');
            $telefone = $request->input('telefone');
            $email = $request->input('email');
            $CEP = $request->input('CEP');
            $cidade = $request->input('cidade');
            $estado = $request->input('estado');

            $usuarioLogado = Auth::check();

            if($usuarioLogado){

                $user_id = Auth::id();
                
            }else{

                $user_id = 0;

            }
        
            //carrinho não está vazio
                if($carrinho){
                    $data = date('Y-m-d H:i:s');
                    $newOrderArray = array("user_id"=>$user_id, "status"=>"em_espera", "data"=>$data, "del_data"=>$data, "preco"=>$carrinho->precoTotal, "primeiro_nome"=>$primeiro_nome, "ultimo_nome"=>$ultimo_nome, "rua"=>$rua, "bairro"=>$bairro, "numero"=>$numero, "complemento"=>$complemento, "telefone"=>$telefone, "email"=>$email, "CEP"=>$CEP, "cidade"=>$cidade, "estado"=>$estado);
                    $pedido_criado = DB::table("pedidos")->insert($newOrderArray);
                    $pedido_id = DB::getPdo()->lastInsertId();
            
                        foreach($carrinho->itens as $carrinho_item){
                            $item_id = $carrinho_item['data']['id'];
                            $item_nome = $carrinho_item['data']['nome'];
                            $item_preco = $carrinho_item['data']['preco'];
                            $novosItensNoPedidoAtual = array("item_id"=>$item_id, "pedido_id"=>$pedido_id, "item_nome"=>$item_nome, "item_preco"=>$item_preco);
                            $itens_pedidos_criados = DB::table("pedido_itens")->insert($novosItensNoPedidoAtual);
                        }
                    
                    //enviar o email

                    //delete carrinho
                    Session::forget("carrinho");

                    $formadepagamento_info = $newOrderArray;
                    $request->session()->put('formadepagamento_info', $formadepagamento_info);
    
                    return redirect()->route("mostrarPagDePagamento");
    
                }else{
    
                    return redirect()->route("loja");
    
                }	
    
            }

            private function enviarEmail(){

                $user = Auth::user();
                $carrinho = Session::get('carrinho');
            
                if($carrinho != null && $user != null){
                
                    Mail::to($user)->send(new EnviarEmailCriado($carrinho));
            
                }
            }

}