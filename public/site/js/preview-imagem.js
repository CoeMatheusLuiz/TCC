function previewImagem(){
    var imagem = document.querySelector('input[name=imagemperfil]').files[0];
    var preview = document.querySelector('img[name=img-perfil]');
    var reader = new FileReader();

    reader.onloadend = function(){

        preview.src = reader.result;

    }

    if(imagem){

        reader.readAsDataURL(imagem);

    }else{

        preview.src= "";

    }
}