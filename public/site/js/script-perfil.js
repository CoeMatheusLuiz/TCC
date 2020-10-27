$(document).ready(function() {

	// campo desabilitado
	$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').attr("disabled", true);
	// cor de fundo para o campo
	$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15').css("background-color", "#cccccc");
	//borda para o campo desabilitado
	$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').css("border", "1px solid red");
 	
	$("#enable1, #enable2, #enable3, #enable4, #enable5, #enable6, #enable7, #enable8, #enable9, #enable10, #enable11, #enable12, #enable13, #enable14, #enable15, #perfil-img, #edit-imgp").click(function (){ 
		// habilitando o campo
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').attr("disabled", false);
		// retornando a cor padrao
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15').css("background-color", "#FFF");
		//borda para o campo habilitado
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').css("border", "1px solid #00FF00");
		
	});
		
	$("#disabled1, #disabled2, #disabled3, #disabled4, #disabled5, #disabled6, #disabled7, #disabled8, #disabled9, #disabled10, #disabled11, #disabled12, #disabled13, #disabled14, #disabled15").click(function (){ 
		
		// habilitando o campo
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').attr("disabled", true);
		// retornando a cor padrao
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15').css("background-color", "#ccc");
		//borda para o campo desabilitado
		$('#campo1, #campo2, #campo3, #campo4, #campo5, #campo6, #campo7, #campo8, #campo9, #campo10, #campo11, #campo12, #campo13, #campo14, #campo15, #perfil-img, #edit-imgp').css("border", "1px solid red");
		
		//limpando o campo
		document.getElementById('campo1').value = '';
		document.getElementById('campo2').value = '';
		document.getElementById('campo3').value = '';
		document.getElementById('campo4').value = '';
		document.getElementById('campo5').value = '';
		document.getElementById('campo6').value = '';
		document.getElementById('campo7').value = '';
		document.getElementById('campo8').value = '';
		document.getElementById('campo9').value = '';
		document.getElementById('campo10').value = '';
		document.getElementById('campo11').value = '';
		document.getElementById('campo12').value = '';
		document.getElementById('campo13').value = '';
		document.getElementById('campo14').value = '';
		document.getElementById('campo15').value = '';
		document.getElementById('perfil-img').value = '';
		document.getElementById('edit-imgp').value = '';
	});



});