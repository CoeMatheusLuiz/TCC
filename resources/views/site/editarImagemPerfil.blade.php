@extends('site.layouts.index')

@section('center')

<div id="corpo-perfil">
      <section id="espaco"></section>
      <section id="espaco2"></section>

      <section id="conteudo-editimgperfil">

<div class="table-responsive text-center edit-img">

    <div class="edit-img-text">
        Editar Imagem Perfil
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>

            <li>{!! print_r($errors->all()) !!}</li>

        </ul>
    </div>
    @endif

    <form action="{{ route('atualizarImagemUsuario',['id' => Auth::user()->id  ])}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}



        <div class="form-group">
            <img name="imagemperfil" id="edit-imagemp" src="{!! Auth::user()->imagemperfil !!}"><br><br>
            <input type="file" name="img-perfil" id="perfil-img imagemperfil" onchange="previewImagem()">
        </div>
        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
</section>
      <section id="espaco"></section>
      <section id="espaco2"></section>

</div>
@endsection