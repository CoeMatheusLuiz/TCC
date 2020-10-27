@extends('site.layouts.admin')

@section('body')


<div class="table-responsive">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>

            <li>{!! print_r($errors->all()) !!}</li>

        </ul>
    </div>
    @endif



    <h3>Imagem Atual</h3>
    <div><img src="{{asset ('storage')}}/produto_imagens/{{$produto['imagem']}}" width="100" height="100" style="max-height:220px" ></div>

    <form action="{{ route('adminAtualizarImagemProduto',['id' => $produto->id ])}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}



        <div class="form-group">
            <label for="description">Atualizar Imagem</label>
            <input type="file" class=""  name="imagem" id="imagem" placeholder="Imagem" value="{{$produto->imagem}}" required>
        </div>

        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
@endsection