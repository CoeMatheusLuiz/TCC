@extends('site.layouts.index')

@section('center')
<div id="corpo-perfil">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-perfil card-bd-text">
                    <div class="card-header text-center text-editarperfil">Editar Perfil</div>

                    <div class="card-body card-bd-text">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route('atualizarPerfil',['id' => Auth::user()->id ])}}" method="POST">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="imagemperfil">Imagem Perfil</label>
                                <img name="img-perfil" id="edit-imgp" src="{!! Auth::user()->imagemperfil !!}"><br><br>
                                <input type="file" class="form-control" name="imagemperfil" id="perfil-img imagemperfil" onchange="previewImagem()" >
                            </div>

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{!! Auth::user()->name !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="login">Login</label>
                                <input type="text" class="form-control" name="login" id="login" placeholder="" value="{!! Auth::user()->login !!}" required>
                            </div>


                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="" value="{!! Auth::user()->email !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="" value="{!! Auth::user()->password !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="remember_token">Confirme sua senha</label>
                                <input type="text" class="form-control" name="remember_token" id="remember_token" placeholder="" value="{!! Auth::user()->remember_token !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="CPF">CPF</label>
                                <input type="text" class="form-control" name="CPF" id="CPF" placeholder="" value="{!! Auth::user()->CPF !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="datanascimento">Data de Nascimento</label>
                                <input type="text" class="form-control" name="datanascimento" id="datanascimento" placeholder="" value="{!! Auth::user()->datanascimento !!}" required>
                            </div>


                            <div class="form-group">
                                <label for="Estado">Estado</label>
                                <input type="text" class="form-control" name="Estado" id="Estado" placeholder="" value="{!! Auth::user()->Estado !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Cidade">Cidade</label>
                                <input type="text" class="form-control" name="Cidade" id="Cidade" placeholder="" value="{!! Auth::user()->Cidade !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Rua">Rua</label>
                                <input type="text" class="form-control" name="Rua" id="Rua" placeholder="" value="{!! Auth::user()->Rua !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Bairro">Bairro</label>
                                <input type="text" class="form-control" name="Bairro" id="Bairro" placeholder="" value="{!! Auth::user()->Bairro !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Numero">Numero</label>
                                <input type="text" class="form-control" name="Numero" id="Numero" placeholder="" value="{!! Auth::user()->Numero !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Complemento">Complemento</label>
                                <input type="text" class="form-control" name="Complemento" id="Complemento" placeholder="" value="{!! Auth::user()->Complemento !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Cep">Cep</label>
                                <input type="text" class="form-control" name="Cep" id="Cep" placeholder="" value="{!! Auth::user()->Cep !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="Celular">Celular</label>
                                <input type="text" class="form-control" name="Celular" id="Celular" placeholder="" value="{!! Auth::user()->Celular !!}" required>
                            </div>

                            <div class="perfil-botoes text-center">
                                <button type="submit" name="submit" class="btn-salvar-perfil">
                                    <a href="" id="" class="save" onMouseOver="toolTip('<b>Salvar</b>')" onMouseOut="toolTip()">
                                        <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                        </svg>
                                    </a>
                                </button>

                                <button type="submit" class="btn-salvar-perfil">
                                        <a href="{{ route('perfilUsuario')}}" class="cancel" onMouseOver="toolTip('<b>Cancelar</b>')" onMouseOut="toolTip()">
                                          <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                        </a>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
