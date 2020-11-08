@extends('site.layouts.index')

@section('center')

  
    <div id="parallax-image1">
      <!-- INICIO PARALLAX -->

      <section id="home" class="d-flex">

        <div class="container align-self-center">

          <div class="row">

            <div class="col-md-12 capa">

              <h1>Seja bem-vindo</h1>
              <p>
                Comer, dar risada, tomar café, cozinhar, sorrir, temperar.
                <br>Venha fazer isso com mais prazer, <br>conheça um pouco
                de nossa aconchegante loja, feita para você.
              </p>

              <a href="{{ route('loja')}}" class="btn-custom btn-botao">
                Veja mais
              </a>

            </div>

          </div>

        </div>

      </section>

    </div><!-- FIM PARALLAX1 -->

  <section id="conteudo-index">
    <div class="container">
      <div class="row">

        <div class="col-md-4">
          <div id="img-conteudo1">
            <p>Acessórios</p>
            <div class="barra"></div>
            <li class="{{ (Route::current()->getName() === 'loja' ? 'active' : '')}}">
            <a href="{{ route('loja')}}" class="btn-conteudo-index btn-botao-conteudo">
              Veja mais
            </a>
            </li>
          </div>
        </div>

        <div class="col-md-4">
          <div id="img-conteudo2">
            <p>Contato</p>
            <div class="barra"></div>
            <a href="{{ route('contato')}}" class="btn-conteudo-index btn-botao-conteudo">
              Veja mais
            </a>
          </div>
        </div>

        <div class="col-md-4">
          <div id="img-conteudo3">
            <p>Equipe</p>
            <div class="barra"></div>
            <a href="{{ route('site.sobre')}}" class="btn-conteudo-index btn-botao-conteudo">
              Veja mais
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <div id="parallax-image2">
  </div>

  <div class="recommended_items idx"><!--recommended_items-->
            <h2 class="text-center rec-txt-idx">ITENS RECOMENDADOS</h2>
            
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active row"> 
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="{{asset('site/imagens/utilidades/1.jpg')}}" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
                        </div>
                          
                        <div class="escolher">
                          <ul class="nav nav-pills nav-justified choose-txt">
                            <li><a href="#"><i class="fa fa-plus-square"></i>  Adicionar aos favoritos</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>  Detalhes do produto</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="{{asset('site/imagens/utilidades/2.jpg')}}" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
                        </div>
                          
                        <div class="escolher">
                          <ul class="nav nav-pills nav-justified choose-txt">
                            <li><a href="#"><i class="fa fa-plus-square"></i>  Adicionar aos favoritos</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>  Detalhes do produto</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="{{asset('site/imagens/utilidades/3.png')}}" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
                        </div>
                          
                        <div class="escolher">
                          <ul class="nav nav-pills nav-justified choose-txt">
                            <li><a href="#"><i class="fa fa-plus-square"></i>  Adicionar aos favoritos</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>  Detalhes do produto</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="{{asset('site/imagens/utilidades/4.jpg')}}" alt="" />
                          <h2>$56</h2>
                          <p>Easy Polo Black Edition</p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</a>
                        </div>
                          
                        <div class="escolher">
                          <ul class="nav nav-pills nav-justified choose-txt">
                            <li><a href="#"><i class="fa fa-plus-square"></i>  Adicionar aos favoritos</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>  Detalhes do produto</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!--/recommended_items-->

  <div id="parallax-image3">
  </div>

  <section id="linha-destaque">
    <!-- INICIO DA LINHA DESTAQUE -->
    <div class="container">
      <!-- INICIO CONTAINER -->
      <h2>LINHAS DESTAQUES</h2>
      <div class="row borda">
        <!-- INICIO DA ROW/BORDA -->
        <div class="col-md-4">
          <img src="site/imagens/oriental.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>LINHA ORIENTAL</h3>
          <p class="p-oriental">Nossa linha oriental conta com um design arrojado, conduzindo para sua mesa
            um tom de elegância. Hoje trabalhamos com itens variados, então, venha conhecer
            melhor essa nossa linha de produtos.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/termopro.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>LINHA INOX</h3>
          <p class="p-inox">Nossos produtos inox de alta qualidade vai lhe trazer uma praticidade na cozinha,
            com um brilho formoso e um desenho esperto. Tenho certeza que você encontrará algo
            que vai agradar seus olhos.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/pratosmelamina.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>LINHA MELAMINA</h3>
          <p class="p-melamina">Venha conhecer nossos utensílios de melamina, temos uma grande variedade de peças,
            com um charme que vai te cativar e atender a sua busca.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/espatula.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>LINHA PREMIUM</h3>
          <p class="p-premium">Visite nossa aba premium, que dispõe de materiais de grande estilo, tenho certeza
            que vai trazer para você e sua cozinha uma fineza fabulosa. Você não vai se arrepender,
            dê uma espiada e diga o que acha.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/facas-prof.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>FACAS PROFISSIONAIS</h3>
          <p class="p-facas">Dispomos de facas profissionais, que tem um corte afiado, e a sua forma conta com um
            grande refinamento. Agradável na pegada, tenho convicção de que ela não vai deixar
            você na mão.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/lecook.png" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <h3>LINHA LE COOK</h3>
          <p class="p-cook">Detemos das panelas le cook, que apresentam traços formosos e cores vivas. Que vai deixar
            sua cozinha adorável, com uma simpatia e sutileza que agradara a todos, principalmente
            você.
          </p>
          <a href="" class="btn-linha btn-botao-linha">
            Veja mais
          </a>
        </div>
      </div> <!-- FIM DA ROW/BORDA -->
    </div> <!-- FIM CONTAINER -->
  </section> <!-- FIM DA LINHA DESTAQUE -->

<div id="parallax-image4">
</div>

@endsection

  