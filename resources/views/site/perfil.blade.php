@extends('site.layouts.index')

@section('center')
<div id="corpo-perfil">
      <section id="espaco"></section>
      <section id="espaco2"></section>
      
    <section id="conteudo-perfil">
        <div class="container" id="bt-foco1">
          <div class="row">

            <div class="col-md-12">
                <h4 class="h4-perfil text-center">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                      <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg> 
                <i>Perfil</i></h4>
                <li class="nav-item divisor-perfil text-center"></li>
            </div>
          </div>
        </div>
          {{!! csrf_field() !!}}
          <div class="container">
            <div class="row">
              
              <div class="col-md-4">
                    <img name="img-perfil" id="edit-imgp" src="{{asset ('storage')}}/imagens/{{Auth::user()->imagemperfil}}"><br><br>
              </div>
              <div class="col-md-8">
                  <table class="table-perfil">
                      <tr>
                          <td>
                              <label>Nome: </label>
                             <input type="text" id="campo1 name" name="campo1 name" placeholder="{!! Auth::user()->name !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                             <label>Login: </label>
                             <input type="text" id="campo2 login" name="campo2 login" placeholder="{!! Auth::user()->login !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Email: </label>
                             <input type="text" id="campo3 email" name="campo3 email" placeholder="{!! Auth::user()->email !!}" disabled/> 
                      </tr>
                      <tr>
                          <td>
                              <label>CPF: </label>
                             <input type="text" id="campo6 cpf" name="campo6 cpf" placeholder="{!! Auth::user()->cpf !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Data de Nascimento: </label>
                             <input type="text" id="campo7 datanascimento" name="campo7 datanascimento" placeholder="{!! Auth::user()->datanascimento !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Estado: </label>
                             <input type="text" id="campo8 estado" name="campo8 estado" placeholder="{!! Auth::user()->estado !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Cidade: </label>
                             <input type="text" id="campo9 cidade" name="campo9 cidade" placeholder="{!! Auth::user()->cidade !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Rua: </label>
                             <input type="text" id="campo10 rua" name="campo10 rua" placeholder="{!! Auth::user()->rua !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Bairro: </label>
                             <input type="text" id="campo11 bairro" name="campo11 bairro" placeholder="{!! Auth::user()->bairro !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                             <label>Numero: </label>
                             <input type="text" id="campo12 numero" name="campo12 numero" placeholder="{!! Auth::user()->numero !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                             <label>Complemento: </label>
                             <input type="text" id="campo13 complemento" name="campo13 complemento" placeholder="{!! Auth::user()->complemento !!}" disabled/>
                      <tr>
                          <td>
                              <label>CEP: </label>
                             <input type="text" id="campo14 cep" name="campo14 cep" placeholder="{!! Auth::user()->cep !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Celular: </label>
                             <input type="text" id="campo15 celular" name="campo15 celular" placeholder="{!! Auth::user()->celular !!}" disabled/> 
                          </td>
                      </tr>
                      
                  </table>
              </div>
            </div>

              <div class="perfil-botoes text-center">
                <a href="{{ route('editarPerfil', ['user' => Auth::user() ])}}" id="enable1" class="edit"> 
                  <svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                  </svg>
                    Editar Perfil
                </a>

                <a href="{{ route('editarImagemUsuario', ['id' => Auth::user()->id ])}}" id="enable1" class="edit-img"> 
                  <svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                  </svg>
                    Editar Imagem
                </a>

              </div>

          </div>

    </section>

    <section id="espaco"></section>
    <section id="espaco2"></section>

    
</div>

@endsection
