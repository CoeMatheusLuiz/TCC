@extends('site.layouts.admin')

@section('body')


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Preco</th>
            <th>Linha</th>
            <th>Quantidade</th>
            <th>Editar Imagem</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>

        @foreach($produtos as $produto)
        <tr>
            <td>{{$produto['id']}}</td>
             <td><img src="{{asset ('storage')}}/produto_imagens/{{$produto['imagem']}}" alt="{{asset ('storage')}}/produto_imagens/{{$produto['imagem']}}" width="100" height="100" style="max-height:220px" ></td>
           
            <td>{{$produto['nome']}}</td>
            <td>{{$produto['descricao']}}</td>
            <td>{{$produto['tipo']}}</td>
            <td>${{$produto['preco']}}</td>
            <td>{{$produto['linha']}}</td>
            <td>{{$produto['quantidade']}}</td>

             <td>
                <a href="{{ route('adminEditarImagemProduto', ['id' => $produto['id'] ])}}">
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-images svg-edit-img" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
                    </svg>
                </a>
            </td>
            <td>
                <a href="{{ route('adminEditarProduto', ['id' => $produto['id'] ])}}">
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-pencil-fill svg-edit-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                    </svg>
                </a>
            </td>

            <td>
                <a href="{{ route('adminExcluirProduto', ['id' => $produto['id'] ])}}">
                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-trash-fill svg-edit-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                </a>
            </td>


        </tr>

        @endforeach





        </tbody>
    </table>

    {{$produtos->links()}}

</div>
@endsection