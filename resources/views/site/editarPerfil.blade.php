@extends('site.layouts.index')

@section('center')
<div id="corpo-perfil">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-perfil card-bd-text">
                    <div class="card-header">Editar Perfil</div>

                    <div class="card-body card-bd-text">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="" method="POST">
                            <div>
                                <label for="name">Nome</label>
                                <input type="text" name="">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-custom btn-botao"></button>
                            </div>
                        </form>
                        
                        <p>{!! Auth::user()->name !!}</p>
                        <p>{!! Auth::user()->login !!}</p>
                        <p>{!! Auth::user()->email !!}</p>
                        <p>{!! Auth::user()->password !!}</p>
                        <p>{!! Auth::user()->cpf !!}</p>
                        <p>{!! Auth::user()->datanascimento !!}</p>
                        <p>{!! Auth::user()->estado !!}</p>
                        <p>{!! Auth::user()->cidade !!}</p>
                        <p>{!! Auth::user()->rua !!}</p>
                        <p>{!! Auth::user()->bairro !!}</p>
                        <p>{!! Auth::user()->numero !!}</p>
                        <p>{!! Auth::user()->complemento !!}</p>
                        <p>{!! Auth::user()->cep !!}</p>
                        <p>{!! Auth::user()->celular !!}</p>

                        <td><a href="{{ route('editarPerfil')}}" class="btn btn-primary">Salvar</a></td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
