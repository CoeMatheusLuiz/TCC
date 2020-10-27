@extends('site.layouts.index')

@section('center')

  
<div id="corpo-carrinho">
		<section id="home" class="d-flex">
			<!--home -->
			<div class="container align-self-center">
			  <!--container -->
			  <div class="row">
				<!--row -->
				<div class="col-md-12 capa">
				  <h1>Carrinho</h1>
				</div>
			  </div>
			  <!--/row -->
			</div>
			<!--/container -->
		  </section>
		  <!--/home -->

  <section id="espaco">
  </section>
  
<section class="carrinho">
<div class="header-middle "><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="{{route('produtoscarrinho')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>


								@if(Auth::check())
									<li><a href="{{ route('perfilUsuario') }}"><i class="fa fa-lock"></i> Perfil</a></li>
								@else
									<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Preco</td>
							<td class="quantity">Quantidade</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        
                    @foreach($carrinhoItens->itens as $item)
                        
                    <tr>
							<td class="cart_product">
								<a href=""><img src="{{asset ('storage')}}/produto_imagens/{{$item['data']['imagem']}}" alt="" width="100" height="100" style="max-height:220px"/></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$item['data']['nome']}}</a></h4>
								<p>Id: {{$item['data']['id']}}</p>
							</td>
							<td class="cart_price">
								<p>$ {{$item['data']['preco']}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">									
									<a class="cart_quantity_up" href="{{route('aumentarProduto',['id' => $item['data']['id']])}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$item['quantidade']}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="{{route('diminuirProduto',['id' => $item['data']['id']])}}"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$ {{$item['precoUnicoTotal']}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{route('DeletarItemDoCarrinho', ['id' => $item['data']['id']])}}"><i class="fa fa-times"></i></a>
							</td>
					</tr>

                        <!--<td class="active">{{$item['data']['id']}}</td>
                        <td class="active">{{$item['data']['nome']}}</td>
                        <td class="active">{{$item['data']['descricao']}}</td>
                        <td class="active">{{$item['data']['tipo']}}</td>
                        <td class="active">{{$item['data']['preco']}}</td>
                        <td class="active">{{$item['data']['linha']}}</td>-->

                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
                            <li>Quantidade <span>{{$carrinhoItens->quantidadeTotal}}</span></li>
							<li>Valor Total <span>{{$carrinhoItens->precoTotal}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="{{route('checkoutProdutos')}}">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
	</section>
	 <section id="espaco"></section>
  <section id="espaco2"></section>
</div>	

@endsection	