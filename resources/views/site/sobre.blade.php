@extends('site.layouts.index')

@section('center')
<div id="corpo-sobre">
  <section id="home" class="d-flex">
    <!--home -->
    <div class="container align-self-center">
      <!--container -->
      <div class="row">
        <!--row -->
        <div class="col-md-12 capa">

          <h1>Sobre Nós</h1>
          <a href="#espaco2" class="btn btn-lg btn-custom btn-botao">
            Resumo
          </a>

        </div>
      </div>
      <!--/row -->
    </div>
    <!--/container -->
  </section>
  <!--/home -->

  <section id="espaco">
  </section>
  <section id="espaco2">
  </section>

  <section id="resumo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>
            A <strong>RP Utilidades</strong> é uma loja familiar, focada em trazer os melhores produtos para sua
            cozinha, tendo como diferencial a qualidade e o custo baixo.
            Nossa <strong>missão</strong> é trazer produtos que certamente vão atender a todos os nossos clientes, e que
            vão transportar para sua cozinha elegância e praticidade.
            Temos como <strong>visão</strong> o foco em ser a melhor empresa do Brasil em vendas de utensilios gourmet.
            E os <strong>valores</strong> que vestimos são: A humildade, ética, a procura por conhecimento, aprendizado
            e melhorias. Entregar sempre o melhor através dos nossos serviços, com foco e determinação.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="conteudo-sobre">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="site/imagens/vendedor.jpg" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <p>Vendedor - Rogério Vinturini</p>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/adm.jpg" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <p>Administradora - Patricia Vinturini</p>
        </div>
        <div class="col-md-4">
          <img src="site/imagens/programador.jpg" class="img-fluid">
          <h6>Imagem meramente ilustrativa</h6>
          <p>Desenvolvedor - Matheus Luiz</p>
        </div>
      </div>
    </div>
  </section>

  <section id="espaco">
  </section>
  <section id="espaco2">
  </section>
</div>
@endsection