@extends('site.layouts.admin')

@section('body')


<div class="table-responsive">

    <h2>Criar Novo Produto</h2>

    <form action="{{ route('adminCriandoNovoProduto')}}" method="post" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
            <label for="nome">Nome</label>
             <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}"  autofocus>

                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" required autocomplete="descricao" autofocus>
                @error('Descrição')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="imagem">Imagem</label>
            <input type="file" class=""  name="imagem" id="imagem" required>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <input id="tipo" type="text" class="form-control @error('tipo') is-invalid @enderror" name="tipo" value="{{ old('tipo') }}" required autocomplete="tipo" autofocus>
                @error('Tipo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="preco">Preco</label>
            <input id="preco" type="text" class="form-control @error('preco') is-invalid @enderror" name="preco" value="{{ old('preco') }}" required autocomplete="preco" autofocus>
             @error('Preco')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group">
            <label for="linha">Linha</label>
            <input id="linha" type="text" class="form-control @error('linha') is-invalid @enderror" name="linha" value="{{ old('linha') }}" required autocomplete="linha" autofocus>
                @error('nome')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <button type="submit" name="submit" class="btn btn-default btn-custom btn-botao btn-carousel">Enviar</button>
    </form>

</div>
@endsection