<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Autenticação de usuário
Auth::routes();

//**LOJA**//
//**LOJA**//
//**LOJA**//

//mostrar todos os produtos da loja
Route::get('loja', ["uses"=>"ProdutosController@index", "as"=>"loja"]);

//mostrar todos os produtos da categoria colheres
Route::get('loja/colheres', ["uses"=>"ProdutosController@colheresProdutos", "as"=>"colheresProdutos"]);

//mostrar todos os produtos da categoria garfos
Route::get('loja/garfos', ["uses"=>"ProdutosController@garfosProdutos", "as"=>"garfosProdutos"]);

//** CARRINHO **//
//** CARRINHO **//
//** CARRINHO **//

//adicionar produto ao carrinho
Route::get('loja/addAoCarrinho/{id}', ['uses'=>'ProdutosController@AddProdutoAoCarrinho', 'as'=>'CarrinhoDeProdutos']);

//mostrar os itens no carrinho.
Route::get('carrinho', ["uses"=>"ProdutosController@MostrarCarrinho", "as"=>"produtoscarrinho"]);

//deletar os itens do carrinho
Route::get('loja/deletarDoCarrinho/{id}', ['uses'=>'ProdutosController@DeletarItemDoCarrinho', 'as'=>'DeletarItemDoCarrinho']);

//Aumentar produto no carrinho
Route::get('loja/aumentarProduto/{id}', ['uses'=>'ProdutosController@aumentarProduto', 'as'=>'aumentarProduto']);

//Diminuir produto no carrinho
Route::get('loja/diminuirProduto/{id}', ['uses'=>'ProdutosController@diminuirProduto', 'as'=>'diminuirProduto']);

//Add ao carrinho usando Ajax Post Request
Route::post('produtos/addAoCarrinhoAjaxPost/', ["uses"=>"ProdutosController@addAoCarrinhoAjaxPost", "as"=>"addAoCarrinhoAjaxPost"]);

//Add ao carrinho usando Ajax Get Request
Route::post('produtos/addAoCarrinhoAjaxGet/{id}', ["uses"=>"ProdutosController@addAoCarrinhoAjaxGet", "as"=>"addAoCarrinhoAjaxGet"]);

//pesquisar
Route::get('pesquisar', ["uses"=>"ProdutosController@pesquisar", "as"=>"pesquisarProdutos"]);

//** PEDIDO **//
//** PEDIDO **//
//** PEDIDO **//

//pagina checkout
Route::get('loja/checkoutProdutos/', ['uses'=>'ProdutosController@checkoutProdutos','as'=>'checkoutProdutos']);

//processo de checkou da pagina
Route::post('loja/criarNovoPedido/', ["uses"=>"ProdutosController@criarNovoPedido", "as"=>"criarNovoPedido"]);

//criar o pedido
Route::get('loja/criarPedido/', ["uses"=>"ProdutosController@criarPedido", "as"=>"criarPedido"]);

//** FORMA DE PAGAMENTO **//
//** FORMA DE PAGAMENTO **//
//** FORMA DE PAGAMENTO **//

//mostrar a pagina de pagamento
Route::get('formadepagamento/paginadepagamento/', ["uses"=>"FormadePagamento\PagamentoController@mostrarPagDePagamento", "as"=>"mostrarPagDePagamento"]);

//**PAINEL ADMIN**//
//**PAINEL ADMIN**//
//**PAINEL ADMIN**//

Route::group(['middleware' => ['restritoAoAdministrador']], function(){ 


//**  ADMIN CONTROLE PRODUTOS**//


//exibição de editar produto
Route::get('produto{id}', ["uses"=>"Admin\AdminProdutosController@editarProduto", "as"=>"adminEditarProduto"]);

//exibição de editar imagem do produto
Route::get('admin/editarImagemProduto/{id}', ["uses"=>"Admin\AdminProdutosController@editarImagemProduto", "as"=>"adminEditarImagemProduto"]);

//atualizar imagem do produto
Route::post('admin/atualizarImagemProduto/{id}', ["uses"=>"Admin\AdminProdutosController@atualizarImagemProduto", "as"=>"adminAtualizarImagemProduto"]);

//atualizar dados do produto
Route::post('admin/atualizarProduto/{id}', ["uses"=>"Admin\AdminProdutosController@atualizarProduto", "as"=>"adminAtualizarProduto"]);

//exibição do criar produto
Route::get('admin/criarNovoProduto', ["uses"=>"Admin\AdminProdutosController@criarProduto", "as"=>"adminCriarNovoProduto"]);

//criando um novo produto no banco de dados
Route::post('admin/criandoNovoProduto/', ["uses"=>"Admin\AdminProdutosController@criandoNovoProduto", "as"=>"adminCriandoNovoProduto"]);

//excluir produto
Route::get('admin/excluirProduto/{id}', ["uses"=>"Admin\AdminProdutosController@excluirProduto", "as"=>"adminExcluirProduto"]);


//**  ADMIN CONTROLE PEDIDOS**//


//Painel de controle de pedidos
Route::get('admin/painelPedidos/', ["uses"=>"Admin\AdminProdutosController@painelPedidos", "as"=>"painelPedidos"]);

//excluir pedido
Route::get('admin/excluirPedido/{id}', ["uses"=>"Admin\AdminProdutosController@excluirPedido", "as"=>"adminExcluirPedido"]);

//obter informações de pagamento por ID do pedido
Route::get('pagamento/getInfoPagamentoPorIdPedido/{pedido_id}', ["uses"=>"Pagamento\PagamentosController@getInfoPagamentoPorIdPedido", "as"=>"getInfoPagamentoPorIdPedido"]);

//editar pedido
Route::get('admin/editarPedido/{pedido_id}', ["uses"=>"Admin\AdminProdutosController@editarPedido", "as"=>"adminEditarPedido"]);

//atualizar dados de pedidos
Route::post('admin/atualizarPedido/{pedido_id}', ["uses"=>"Admin\AdminProdutosController@atualizarPedido", "as"=>"adminAtualizarPedido"]);


//**  ADMIN CONTROLE USUÁRIOS**//


//Painel de controle de pedidos
Route::get('admin/painelUsuarios/', ["uses"=>"Admin\AdminProdutosController@painelUsuarios", "as"=>"painelUsuarios"]);

//excluir usuario
Route::get('admin/excluirUsuario/{id}', ["uses"=>"Admin\AdminProdutosController@excluirUsuario", "as"=>"adminExcluirUsuario"]);

//editar usuario
Route::get('admin/editarUsuario/{id}', ["uses"=>"Admin\AdminProdutosController@editarUsuario", "as"=>"adminEditarUsuario"]);

//atualizar dados de pedidos
Route::post('admin/atualizarUsuario/{id}', ["uses"=>"Admin\AdminProdutosController@atualizarUsuario", "as"=>"adminAtualizarUsuario"]);


});

//Painel Admin
Route::get('admin/produtos', ["uses"=>"Admin\AdminProdutosController@index", "as"=>"adminPainelProdutos"])->middleware('restritoAoAdministrador');


//**PERFIL USUÁRIO**//
//**PERFIL USUÁRIO**//
//**PERFIL USUÁRIO**//

//exibir perfil do usuário
Route::get('/home', ["uses"=>"HomeController@index", "as"=>"perfilUsuario"])->middleware('auth');;

//editar perfil do usuário
Route::post('/editarPerfil/{login}', ["uses"=>"HomeController@editarPerfil", "as"=>"editarPerfil"])->middleware('auth');;

//editar perfil do usuário
Route::post('/atualizarPerfil/{login}', ["uses"=>"HomeController@atualizarPerfil", "as"=>"atualizarPerfil"])->middleware('auth');;



//Rotas para paginas
Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('contato', function () {
    return view('site.contato');
})->name('site.contato');

Route::get('/inscreverse', function () {
    return view('site.inscreverse');
})->name('site.inscreverse');

Route::get('/inscreverse', function () {
    return view('site.inscreverse');
})->name('site.inscreverse');

