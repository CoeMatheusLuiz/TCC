<?php
namespace App\Http\Controllers\FormadePagamento;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Produto;
use App\Carrinho;

class PagamentoController extends Controller
{
    
    public function index(){
        
        //$produtos = [0=>["name"=>"Iphone", "categoria"=>"SmartPhone", "preco"=>1000]];

        $produtos = Produto::paginate(3);

        return view("site.loja", compact("produtos"));
    }

    public function mostrarPagDePagamento(){

        $formadepagamento_info = Session::get('formadepagamento_info');

        if($formadepagamento_info['status'] == 'em_espera'){

            return view('site.formadepagamento.paginadepagamento',['formadepagamento_info'=> $formadepagamento_info]);

        }else{

            return redirect()->route("loja");

        }

        Session::forget("carrinho");
        Session::flush();

    }

   
    

}






































