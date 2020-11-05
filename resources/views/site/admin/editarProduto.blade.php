@extends('site.layouts.admin')

@section('body')

@if(Auth::user()->admin_level == 1)
<div class="table-responsive">

<form action="{{ route('adminAtualizarProduto',['id' => $produto->id ])}}" method="post">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
             <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{$produto->nome}}"  autofocus>

                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{$produto->descricao}}" required autocomplete="descricao" autofocus>
                @error('Descrição')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{$produto->tipo}}" required autocomplete="tipo" autofocus>
                @error('Tipo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="preco">Preco</label>
            <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{$produto->preco}}" required autocomplete="preco" autofocus>
             @error('Preco')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="linha">Linha</label>
            <input id="linha" type="text" class="form-control @error('linha') is-invalid @enderror" name="linha" value="{{$produto->linha}}" autofocus>
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
@else

    <div class="alert alert-danger"> Somente administradores de primeiro nível podem editar produtos </div>

@endif

@endsection