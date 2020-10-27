@extends('site.layouts.admin')

@section('body')

<div class="table-responsive">

    <form action="{{ route('adminAtualizarProduto',['id' => $produto->id ])}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Produto" value="{{$produto->nome}}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao" value="{{$produto->descricao}}" required>
        </div>


        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" name="Tipo" id="Tipo" placeholder="Tipo" value="{{$produto->tipo}}" required>
        </div>

        <div class="form-group">
            <label for="type">Preco</label>
            <input type="text" class="form-control" name="preco" id="preco" placeholder="preco" value="{{$produto->preco}}" required>
        </div>

        <div class="form-group">
            <label for="type">Linha</label>
            <input type="text" class="form-control" name="linha" id="linha" placeholder="linha" value="{{$produto->linha}}" required>
        </div>

        <button type="submit" name="submit" class="btn btn-default">Enviar</button>
    </form>

</div>



@endsection