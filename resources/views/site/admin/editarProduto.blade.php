@extends('site.layouts.admin')

@section('body')

@if(Auth::user()->admin_level == 1)
<div class="table-responsive">

<form action="{{ route('adminAtualizarProduto',['id' => $produto->id ])}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Produto" value="{{$produto->nome}}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao" value="{{$produto->descricao}}" required>
        </div>


        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo" value="{{$produto->tipo}}" required>
        </div>

        <div class="form-group">
            <label for="preco">Preco</label>
            <input type="text" class="form-control" name="preco" id="preco" placeholder="preco" value="{{$produto->preco}}" required>
        </div>

        <div class="form-group">
            <label for="linha">Linha</label>
            <input type="text" class="form-control" name="linha" id="linha" placeholder="linha" value="{{$produto->linha}}" required>
        </div>

        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
@else

    <div class="alert alert-danger"> Somente administradores de primeiro nível podem editar produtos </div>

@endif

@endsection