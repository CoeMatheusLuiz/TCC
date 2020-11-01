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

        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
        @endif

          {{!! csrf_field() !!}}
          <div class="container">
            <div class="row">
              
              <div class="col-md-4">
                    <img name="img-perfil" id="edit-imgp" src="{!! Auth::user()->imagemperfil !!}"><br><br> 
                    <input type="file" name="imagemperfil" id="perfil-img imagemperfil" onchange="previewImagem()" ><br><br>
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
                             <input type="text" id="campo2 login" name="campo2 login" placeholder="{!! Auth::user()->Login !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Email: </label>
                             <input type="text" id="campo3 email" name="campo3 email" placeholder="{!! Auth::user()->email !!}" disabled/> 
                      </tr>
                      <tr>
                          <td>
                              <label>Senha: </label>
                             <input type="text" id="campo4 password" name="campo4 password" placeholder="Senha criptografada" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Confirme a senha: </label>
                             <input type="text" id="campo5 remember_token" name="campo5 remember_token" placeholder="Senha criptografada" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>CPF: </label>
                             <input type="text" id="campo6 CPF" name="campo6 CPF" placeholder="{!! Auth::user()->CPF !!}" disabled/> 
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
                             <input type="text" id="campo8 Estado" name="campo8 Estado" placeholder="{!! Auth::user()->Estado !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Cidade: </label>
                             <input type="text" id="campo9 Cidade" name="campo9 Cidade" placeholder="{!! Auth::user()->Cidade !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Rua: </label>
                             <input type="text" id="campo10 Rua" name="campo10 Rua" placeholder="{!! Auth::user()->Rua !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Bairro: </label>
                             <input type="text" id="campo11 Bairro" name="campo11 Bairro" placeholder="{!! Auth::user()->Bairro !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                             <label>Numero: </label>
                             <input type="text" id="campo12 Numero" name="campo12 Numero" placeholder="{!! Auth::user()->Numero !!}" disabled/> 
                          </td>
                      </tr>
                      <tr>
                          <td>
                             <label>Complemento: </label>
                             <input type="text" id="campo13 Complemento" name="campo13 Complemento" placeholder="{!! Auth::user()->Complemento !!}" disabled/>
                      <tr>
                          <td>
                              <label>CEP: </label>
                             <input type="text" id="campo14 Cep" name="campo14 Cep" placeholder="{!! Auth::user()->Cep !!}" disabled/>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <label>Celular: </label>
                             <input type="text" id="campo15 Celular" name="campo15 Celular" placeholder="{!! Auth::user()->Celular !!}" disabled/> 
                          </td>
                      </tr>
                      
                  </table>

                  <div class="perfil-botoes text-center">
                    <a href="{{ route('editarPerfil', ['id' => Auth::user()->id  ])}} " id="enable1" class="edit"> 
                      <svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                      Editar Perfil
                    </a>
                  </div>

              </div>
            </div>
          </div>

    </section>

    <section id="espaco"></section>
    <section id="espaco2"></section>




<script>
      function previewImagem(){
        var imagemperfil = document.querySelector('input[name=imagemperfil]').files[0];
        var preview = document.querySelector('img[name=img-perfil]');
        
        var reader = new FileReader();
        
        reader.onloadend = function () {
          preview.src = reader.result;
        }
        
        if(imagemperfil){
          reader.readAsDataURL(imagemperfil);
        }else{
          preview.src = "";
        }
      }
    </script>
    
</div>

@endsection
