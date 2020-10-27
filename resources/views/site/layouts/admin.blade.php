<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RP Utilidades Gourmet</title>
    <link rel="icon " href="{{ asset('site/imagens/icone.png') }}">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
        <link href="{{asset ('site/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Favicons -->
        <link rel="apple-touch-icon" href="{{asset('/docs/4.5/assets/img/favicons/apple-touch-icon.pn') }}g" sizes="180x180">
        <link rel="icon" href="{{asset('/docs/4.5/assets/img/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{asset('/docs/4.5/assets/img/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
        <link rel="manifest" href="{{asset('/docs/4.5/assets/img/favicons/manifest.json') }}">
        <link rel="mask-icon" href="{{asset('/docs/4.5/assets/img/favicons/safari-pinned-tab.svg') }}" color="#563d7c">
        <link rel="icon" href="{{asset('/docs/4.5/assets/img/favicons/favicon.ico') }}">
        <meta name="msapplication-config" content="{{asset('/docs/4.5/assets/img/favicons/browserconfig.xml') }}">
        <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('site/css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow navbar-adm">

        <a href="" class="navbar-brand">
            <img src="{{ asset('site/imagens/logo.png')}}" width="142">
        </a>


        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="{{ route('site.index')}}">Ir ao Site</a>
            </li>
          </ul>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="{{route('adminCriarNovoProduto')}}">Inserir Novo Produto</a>
            </li>
          </ul>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="{{route('painelPedidos')}}">Pedidos</a>
            </li>
          </ul>
          <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <div>
                 <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Sair') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
            </div>
            </li>
          </ul>
        </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-sm-3  d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav nav-tabs flex-column">
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{route('adminPainelProdutos')}}">
                          <span data-feather="home"></span>
                          Dashboard <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{route('painelPedidos')}}">
                          <span data-feather="file"></span>
                          Pedidos
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{route('adminCriarNovoProduto')}}">
                          <span data-feather="shopping-cart"></span>
                          Novo Produto
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="{{route('painelUsuarios')}}">
                          <span data-feather="users"></span>
                          Clientes
                        </a>
                      </li>
                    </ul>
                </div>
            </nav>
                <div class="ala-pc col-sm-9 main ml-auto">


                     @yield('body')

                </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{asset ('site/js/dashboard.js') }}"></script></body>
</html>
