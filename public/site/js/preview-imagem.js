function previewImagem(){
	var imagem = document.querySelector('input[name=imagem-perfil]')
	var preview = document.querySelector('img');

	var reader = new FileReader();

	reader.onloadend = function(){
		preview.src = reader.result;
	}

		if(){

			reader.readAsDataURL(imagem);

		}else{

			preview.src= "";

		}
}