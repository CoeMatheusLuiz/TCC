<!DOCTYPE html>

<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- HTML5Shiv -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <![endif]-->

  <!-- Scripts -->
  <script src="{{ asset('site/js/app.js') }}" defer></script>
  <script src="{{ asset('site/js/jquery-3.5.0.min.js') }}" defer></script>
  <script src="{{ asset('site/js/jquery.mask.js') }}" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('site/js/estados_cidades.json') }}"></script>
  <script src="{{ asset('site/js/tooltip.js') }}"></script>
  <script src="{{ asset('site/js/jquery.js')}}"></script>
  <script src="{{ asset('site/js/script-perfil.js')}}"></script>
  

  <!-- Fontes linkadas-->
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet"><!-- Nome: Sen -->
  <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet"> <!-- Nome: Bellota -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@800&display=swap" rel="stylesheet"><!-- Nome: Baloo -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet"><!-- Nome: Playfair -->
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet"><!-- Nome: Comic -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Estilo customizado -->
    <link href="{{ asset('site/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet">
    

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->


    <link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png')}}">
        
    <title>RP Utilidades Gourmet</title>
    <link rel="icon " href="site/imagens/icone.png">

</head>

<body>

<header>

  <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <!-- INICIO NAVEGAÇÃO -->

          <div class="container">
            <!-- INICIO CONTAINER -->

            <a href="" class="navbar-brand">
              <img src="site/imagens/logo.png" width="142">
            </a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
              <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="{{ route('site.index')}}" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                  <a href="{{route('loja')}}" class="nav-link">Loja</a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('site.sobre')}}" class="nav-link">Sobre</a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('site.contato')}}" class="nav-link">Contato</a>
                </li>

                <li class="nav-item divisor">
                </li>

                <div id="app">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto">

                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                            </li>
                          @endif
                        @else
                          <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle dropdown-name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                              <div class="dropdown-menu dropdown-menu-right dropdown-sair" aria-labelledby="navbarDropdown">
                                  
                                  <a class="dropdown-item" href="{{ route('perfilUsuario') }}">
                                    {{ __('Perfil') }}
                                  </a>

                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                  </a>

                                  @if($usuarioData->isAdmin())
                                    <a class="dropdown-item" href="{{ route('adminPainelProdutos')}}">
                                      {{ __('Painel Admin') }}
                                    </a>
                                  @endif

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                  </form>

                              </div>
                          </li>

                          <script type="text/javascript">
                              $(document).ready(function(){
        
                                    var botao = $('.dropdown-name');
                                    var dropDown = $('.dropdown-sair');
                                    
                                    botao.on('click', function(event)
                                    {
                                      dropDown.stop(true, true).slideToggle();
                                      event.stopPropagation();
                                    });
                                });
                          </script>

                        @endguest
                      </ul>
                    </div>
                  </div>


                  </div>
          </div><!-- FIM CONTAINER -->
      </nav><!-- FIM NAVEGAÇÃO -->
  </header>