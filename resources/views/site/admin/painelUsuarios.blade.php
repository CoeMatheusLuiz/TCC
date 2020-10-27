@extends('site.layouts.admin')

@section('body')

@if(session('statusExclusãoUsuario'))
    <div class="alert alert-danger">{{session('statusExclusãoUsuario')}}</div>
@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Admin</th>
            <th>Admin Level</th>
            <th>Nome</th>
            <th>Login</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Cep</th>
            <th>Celular</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        </thead>
        <tbody>


            @foreach($users as $usuarios)  
            <tr>
                
                <td>{{$usuarios->id}}</td> 
                <td>{{$usuarios->admin}}</td>
                <td>{{$usuarios->admin_level}}</td>
                <td>{{$usuarios->name}}</td>
                   

              <td><a href="{{ route('adminEditarUsuario', ['id' => $usuarios->id ])}}" class="btn btn-primary">Editar</a></td>
              <td><a href="{{ route('adminExcluirUsuario',['id' => $usuarios->id ])}}" onclick="return confirm('Tem certeza de que deseja excluir este Usuarios?')" class="btn btn-warning">Remover</a></td>
          </tr>
        @endforeach



        </tbody>
    </table>

    {{$users->links()}}



</div>
@endsection
