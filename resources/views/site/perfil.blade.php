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

        <div class="container">
          <div class="row">
            <div class="col-md-4">
                  <img name="img-perfil" id="edit-imgp" src="{!! Auth::user()->imagemperfil !!}"><br><br> 
                  <input type="file" name="imagemperfil" id="perfil-img" onchange="previewImagem()" ><br><br>
            </div>
            <div class="col-md-8">
                <table class="table-perfil">
                    <tr>
                        <td>
                            <label>Nome: </label>
                           <input type="text" id="campo1" name="campo1" placeholder="{!! Auth::user()->name !!}" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label>Login: </label>
                           <input type="text" id="campo2" name="campo2" placeholder="{!! Auth::user()->Login !!}" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email: </label>
                           <input type="text" id="campo3" name="campo3" placeholder="{!! Auth::user()->email !!}"/> 
                    </tr>
                    <tr>
                        <td>
                            <label>Senha: </label>
                           <input type="text" id="campo4" name="campo4" placeholder="Senha criptografada"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Confirme a senha: </label>
                           <input type="text" id="campo5" name="campo5" placeholder="Senha criptografada"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>CPF: </label>
                           <input type="text" id="campo6" name="campo6" placeholder="{!! Auth::user()->CPF !!}"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Data de Nascimento: </label>
                           <input type="text" id="campo7" name="campo7" placeholder="{!! Auth::user()->datanascimento !!}"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Estado: </label>
                           <input type="text" id="campo8" name="campo8" placeholder="{!! Auth::user()->Estado !!}"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Cidade: </label>
                           <input type="text" id="campo9" name="campo9" placeholder="{!! Auth::user()->Cidade !!}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Rua: </label>
                           <input type="text" id="campo10" name="campo10" placeholder="{!! Auth::user()->Rua !!}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Bairro: </label>
                           <input type="text" id="campo11" name="campo11" placeholder="{!! Auth::user()->Bairro !!}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label>Numero: </label>
                           <input type="text" id="campo12" name="campo12" placeholder="{!! Auth::user()->Numero !!}"/> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                           <label>Complemento: </label>
                           <input type="text" id="campo13" name="campo13" placeholder="{!! Auth::user()->Complemento !!}"/>
                    <tr>
                        <td>
                            <label>CEP: </label>
                           <input type="text" id="campo14" name="campo14" placeholder="{!! Auth::user()->Cep !!}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Celular: </label>
                           <input type="text" id="campo15" name="campo15" placeholder="{!! Auth::user()->Celular !!}"/> 
                        </td>
                    </tr>
                    
                </table>
            </div>
          </div>

          <div class="col-md-12 text-center perfil-botoes">
            <a href="#bt-foco1" id="enable1" class="edit" onMouseOver="toolTip('<b>Editar</b>')" onMouseOut="toolTip()">
              <svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
              </svg>
            </a>

            <a href="#bt-foco1" id="disabled1" class="cancel" onMouseOver="toolTip('<b>Cancelar</b>')" onMouseOut="toolTip()">
                <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>

            <a href="" id="" class="save" onMouseOver="toolTip('<b>Salvar</b>')" onMouseOut="toolTip()">
                <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                </svg>
            </a>
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
