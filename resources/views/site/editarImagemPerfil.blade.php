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

    <form action="{{ route('atualizarImagemUsuario',['id' => Auth::user()->id  ])}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}

                    <input id="imagemperfil" type="file" class="@error('imagemperfil') is-invalid @enderror" name="imagemperfil" value="{!! Auth::user()->imagemperfil !!}" required autocomplete="imagemperfil" onchange="previewImagem()">
                    <img name="img-perfil" id="img-perfil"><br><br>
                      @error('imagem')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                      @enderror

        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
</section>
      <section id="espaco"></section>
      <section id="espaco2"></section>

</div>
@endsection