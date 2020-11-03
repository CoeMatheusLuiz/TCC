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

                        <form action="{{ route('atualizarPerfil', ['user' => Auth::user() ])}}" method="post">
                            @csrf @method('PATCH')
                            <div class="form-group">
                                <label for="imagemperfil">Imagem Perfil</label>
                                <img name="img-perfil" id="edit-imagemp" src="{!! Auth::user()->imagemperfil !!}"><br><br>
                            </div>

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{old('name',$user->name)}}" required>
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
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" value="{!! Auth::user()->cpf !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="datanascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" name="datanascimento" id="datanascimento" placeholder="" value="{!! Auth::user()->datanascimento !!}" required>
                            </div>


                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input id="estado" class="form-control" name="estado" value="{!! Auth::user()->estado !!}" required autocomplete="estado">
                                </input>
                            </div>

                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input id="cidade" class="form-control " name="cidade" value="{!! Auth::user()->cidade !!}" required autocomplete="cidade">
                                </input>
                            </div>

                            <div class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" name="rua" id="rua" placeholder="" value="{!! Auth::user()->rua !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="" value="{!! Auth::user()->bairro !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="numero">Numero</label>
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="" value="{!! Auth::user()->numero !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento" placeholder="" value="{!! Auth::user()->complemento !!}">
                            </div>

                            <div class="form-group">
                                <label for="cep">Cep</label>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="" value="{!! Auth::user()->cep !!}" required>
                            </div>

                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="" value="{!! Auth::user()->celular !!}" required>
                            </div>

                            <div class="perfil-botoes text-center">
                                <button type="submit" name="submit" class="btn-salvar-perfil">
                                    <a href="" id="" class="save" onMouseOver="toolTip('<b>Salvar</b>')" onMouseOut="toolTip()">
                                        <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                                        </svg>
                                    </a>
                                </button>
                                        <a href="{{ route('perfilUsuario')}}" class="cancel" onMouseOver="toolTip('<b>Cancelar</b>')" onMouseOut="toolTip()">
                                          <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                          </svg>
                                        </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

