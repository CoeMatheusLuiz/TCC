@extends('site.layouts.index')

@section('center')


<div id="corpo-loja">

  <section id="home" class="d-flex">

	<div  id="carousel-legenda" class="carousel slide" data-ride="carousel">
	
		<!-- Indicadores -->
			<ol class="carousel-indicators">

				<li class="active" data-target="#carousel-legenda" data-slide-to="0"></li>

				<li data-target="#carousel-legenda" data-slide-to="1"></li>

				<li data-target="#carousel-legenda" data-slide-to="2"></li>

			</ol>
	

	<div class="carousel-inner">

		<div class="carousel-item active">
			<img src="{{asset('site/imagens/carrosel/taça1.jpg')}}" class="img-fluid d-block">
				<div class="carousel-caption">
                  <div id="carousel-texto">
                    <h3>Loja</h3>
                    <p>
                      Venha conhecer nossas taças, com um contorno bem-feito e material de qualidade. 
					  Tenho convicção de que você irá se deleitar de um bom vinho com mais satisfação.
                    </p>
					<a href="#produtos" class="btn btn-lg btn-custom btn-botao btn-carousel">
						Taças
					</a>
                  </div>
                </div>
		</div>

		<div class="carousel-item">
			<img src="{{asset('site/imagens/carrosel/pizzaria1.jpg')}}" class="img-fluid d-block">
				<div class="carousel-caption">
                  <div id="carousel-texto">
                    <h3>Loja</h3>
                    <p>
                      Fazer aquela pizza na noite de um final de semana, com a familia, 
					  não tem preço não é mesmo. Deixe-nos ajudar, dê uma olhada em nossos produtos de pizzaria.
                    </p>
					<a href="#produtos" class="btn btn-lg btn-custom btn-botao btn-carousel">
						Pizzaria
					</a>
                  </div>
                </div>
		</div>
	
		<div class="carousel-item">
			<img src="{{asset('site/imagens/carrosel/talheres3.jpg')}}" class="img-fluid d-block">
				<div class="carousel-caption">
                  <div id="carousel-texto">
                    <h3>Loja</h3>
                    <p>
                      Corra para dar uma espiada em nossos talheres, com diferentes cores. 
					  Tenho a certeza que além de te satisfazer vai deixar sua cozinha mais linda e suas visitas de boca aberta.
                    </p>
					<a href="#produtos" class="btn btn-lg btn-custom btn-botao btn-carousel">
						Talheres
					</a>
                  </div>
                </div>
		</div>			

	</div>
	
			<a href="#carousel-legenda" class="carousel-control-prev" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#carousel-legenda" class="carousel-control-next" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>

</div>
  </section>
  <!--/home -->

  <section id="espaco"></section>
  <section id="espaco"></section>



  <section id="produtos">
    <div class="container">

							<header id="header"><!--header-->
								<div class="header-middle"><!--header-middle-->
									<div class="container">
										<div class="row">
											<div class="">
												<div class="shop-menu pull-right">
													<ul class="nav shop-menu-nav">
																<li><a href="{{route('pagListaDesejos')}}"><i class="fa fa-star nav-item"></i> Lista de Desejos</a></li>
																<li><a href="checkout.html"><i class="fa fa-crosshairs nav-item"></i> Checkout</a></li>
																<li><a href="{{route('produtoscarrinho')}}"><i class="fa fa-shopping-cart nav-item"></i> Carrinho</a></li>
																
																@if(Auth::check())
																	<li><a href="{{ route('perfilUsuario') }}"><i class="fa fa-lock nav-item"></i> Perfil</a></li>
																@else
																	<li><a href="{{ route('login') }}"><i class="fa fa-lock nav-item"></i> Login</a></li>
																@endif

													</ul>
												</div>
											</div>
										</div>
									</div>
								</div><!--/header-middle-->
							
								<div class="header-bottom"><!--header-bottom-->
									<div class="container">
										<div class="row">
											<div class="col-sm-9">
												<div class="navbar-header">
													<div class="search-box pull-right">
														<input class="search-txt" type="text" placeholder="Tipo de Busca"/>
														<a class="search-btn" href="#">
															<i class="fa fa-search bt" aria-hidden="true"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!--/header-bottom-->
							</header><!--/header-->

							<div class="container">
								@include('site.alert')
							</div>
								
	<section>
		<div class="container itens categorias">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categorias</h2>
						<div class="panel-group category-products fa-cat-prod" id="accordian"><!--produtos da categoria-->
							<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#porcelana">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Porcelana
											</a>
										</h4>
									</div>
									<div id="porcelana" class="panel-collapse collapse">
										<div class="panel-body">
											<ul id="navegacao">
												<li><a href="1.html" id="xicara">Xícaras </a></li>
												<li><a href="">Canecas </a></li>
												<li><a href="">Pires </a></li>
												<li><a href="">Travessas </a></li>
												<li><a href="">Tigelas </a></li>
												<li><a href="">Ramekin </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#eletroportateis">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Eletro
											</a>
										</h4>
									</div>
									<div id="eletroportateis" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="2.html" id="mesat">Mesa Térmica </a></li>
												<li><a href="">Cooktops </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#melaminaprofissional">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Melamina
											</a>
										</h4>
									</div>
									<div id="melaminaprofissional" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="">Finger Food </a></li>
												<li><a href="">Travessas </a></li>
												<li><a href="">Sobremesa </a></li>
												<li><a href="">Pratos</a></li>
												<li><a href="">Saladeiras </a></li>
												<li><a href="">Bowls e Mini Bowls </a></li>
												<li><a href="">Saladeiras Empilháveis </a></li>
												<li><a href="">Bandejas e Pranchas </a></li>
												<li><a href="">Linha Diamond </a></li>
												<li><a href="">Design GN's </a></li>
												<li><a href="">Linha Oriental </a></li>
												<li><a href="">Linha Rustic </a></li>
												<li><a href="">Barcos </a></li>
												<li><a href="">Sushi GN's </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#talheres">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Talheres
											</a>
										</h4>
									</div>
									<div id="talheres" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="">Elite </a></li>
												<li><a href="">Elite Furtacor </a></li>
												<li><a href="">Elite Cor Ouro </a></li>
												<li><a href="">Elite Cor Cobre</a></li>
												<li><a href="">Elite Cor Preta </a></li>
												<li><a href="">Victória</a></li>
												<li><a href="">Basic </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#cutelaria">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Cutelaria
											</a>
										</h4>
									</div>
									<div id="cutelaria" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="">Facas profissionais </a></li>
												<li><a href="">Cutelaria Profissional </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#bar">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Bar
											</a>
										</h4>
									</div>
									<div id="bar" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="">Bares e Pizzaria </a></li>
												<li><a href="">Drinks </a></li>
												<li><a href="">Abridores </a></li>
												<li><a href="">Acessórios </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#utensilios">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												Utensílios
											</a>
										</h4>
									</div>
									<div id="utensilios" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<li><a href="">Gourmet Mix </a></li>
												<li><a href="">Linha Tuboline </a></li>
												<li><a href="">Linha Victória </a></li>
												<li><a href="">Linha Lara </a></li>
												<li><a href="">Linha Star </a></li>
												<li><a href="">Pegadores </a></li>
												<li><a href="">Raladores e Peneiras </a></li>
												<li><a href="">Tesoura </a></li>
												<li><a href="">Espremedores </a></li>
												<li><a href="">Batedor </a></li>
												<li><a href="">Concha </a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Dispensadores</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Taças</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Hotel Alumínio</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Panela de Pressão</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Rechaud</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Garrafas Térmicas</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Panelas LE COOK</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Sousplat em Inox</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Barra Magnética</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Canecas</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Utilidades em Aço Inox </a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Cubas GN's</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Caixas Organizadoras</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Artefatos em Arame</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="#">Churrasco</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{route('colheresProdutos')}}">Colheres</a></h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{route('garfosProdutos')}}">Garfos</a></h4>
									</div>
								</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Linhas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Linha Oriental</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Linha Melamina</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Linha Le Cook</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Linha Rustic</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Linha Diamond</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Linha Tuboline</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="brands_products"><!--brands_products-->
							<h2>Marcas</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Elite</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Victória</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Basic</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Le Cook</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Gourmet Mix</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->

						<div class="price-range"><!--price-range-->
							<h2>Faixa de Preço</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
							<h2 class="title text-center">Itens</h2>

							@if(Session::has('info'))
							    <div class="alert alert-danger-loja">
							       {{Session::get('info')}}
							    </div>
							@endif

					<div class="features_items row"><!--features_items-->
							@foreach($produtos as $produto)
								<div class="col-md-4">
									<div class="product-image-wrapper">
										<div class="single-products">
												<div class="productinfo text-center">

													{{ csrf_field() }}
													<img src="{{asset ('storage')}}/produto_imagens/{{$produto['imagem']}}" alt="{{asset ('storage')}}/produto_imagens/{{$produto['imagem']}}" width="100" height="100" style="max-height:220px"/>
													<h2>{{$produto->preco}}</h2>
													<p>{{$produto->nome}}</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
												</div>
												<div class="product-overlay">
													<div class="overlay-content">
													<h2>{{$produto->preco}}</h2>
													<p>{{$produto->nome}}</p>
													<a href="{{route('CarrinhoDeProdutos', ['id'=>$produto->id])}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
												</div>
										</div>
										<div class="choose">
											<ul class="nav nav-pills nav-justified">
												<li><a href="{{route('addListaDesejos', ['id'=>$produto->id])}}"><i class="fa fa-plus-square"></i>  Adicionar a lista de desejos</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>  Detalhes do produto</a></li>
											</ul>
										</div>
									</div>
								</div>
						@endforeach

					</div><!--features_items-->

					{{$produtos->links()}}


					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">

							<ul class="nav nav-tabs" id="myTab" role="tablist">
							  <li class="nav-item active primeiro" role="presentation">
							    <a class="nav-link" id="prim-tab" data-toggle="tab" href="#prim" role="tab" aria-controls="profile" aria-selected="false">Home</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
							  </li>
							  <li class="nav-item" role="presentation">
							    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
							  </li>
							</ul>

							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="prim" role="tabpanel" aria-labelledby="prim-tab">
								  	<div class="row">
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/1.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/1.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="row">
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/2.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/2.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="	contact-tab">
									<div class="row">
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/3.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img src="{{asset('site/imagens/utilidades/3.jpg')}}" alt="" />
														<h2>$56</h2>
														<p>Easy Polo Black Edition</p>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">ITENS RECOMENDADOS</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner"><!--Inner -->
              
				              <div class="carousel-item active">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/1.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/2.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/3.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

				              <div class="carousel-item">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

				              <div class="carousel-item">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

            				</div><!--/Inner -->
	            				<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
						</div>

					</div><!--/recommended_items-->

					<div class="recommended_items"><!--items_linha-->
						<h2 class="title text-center">ITENS DE LINHA</h2>
						
						<div id="linha-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner"><!--Inner -->
              
				              <div class="carousel-item active">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/1.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/2.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/3.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

				              <div class="carousel-item">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

				              <div class="carousel-item">
				                <div class="row">
				                <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>2</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>3</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                  <div class="col-md-3">
				                    <div class="product-image-wrapper">
				                      <div class="single-products">
				                        <div class="productinfo text-center">
				                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
				                          <h2>1</h2>
				                          <p>Easy Polo Black Edition</p>
				                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
				                        </div>
				                        
				                      </div>
				                    </div>
				                  </div>
				                </div>
				              </div>

            				</div><!--/Inner -->
	            				<a class="left recommended-item-control" href="#linha-item-carousel" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right recommended-item-control" href="#linha-item-carousel" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
						</div>
					</div><!--/items_linha-->

				</div>
			</div>
		</div>
	</section>
    </div>
</section>

	<section id="espaco">
	</section>
	<section id="espaco2">
	</section>
</div>
  

@endsection
 