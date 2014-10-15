// var sTexto


// function normal(){
// 	sTexto = $('#messege').val();
// 	$('#resultados').after("<div class='normal'>"+sTexto+"</div>");
	

// }
// function importante(){
// 	sTexto = $('#messege').val();
// 	$('#resultados').append("<div class='importante'>"+sTexto+"</div>");
	
// }
// function urgente(){
// 	sTexto = $('#messege').val();
// 	$('#resultados').before("<div class='urgente'>"+sTexto+"</div>")
// }

/*******************************/
	//Variables
	var $texto = $('#messege');
	var $cajaTexto = $('#resultados');
	var sCssNormal = 'normal';
	var sCssImportante = 'importante';
	var sCssUrgente = 'urgente';
	var sHTML = '';
	
	
	function anyadirMensaje(iniAccion){
		var sMensaje = $texto.val();
		switch(iniAccion){
			case 1:
			sHTML = $('<div>',{
			
				'html':sMensaje,
				'class' : sCssNormal	
			});
			$cajaTexto.after(sHTML)
			break;

			case 2:
				sHTML = $('<div>',{
			
				'html':sMensaje,
				'class' : sCssImportante	
			});
			$cajaTexto.append(sHTML)
			break;

			case 3:
				sHTML = $('<div>',{
			
				'html':sMensaje,
				'class' : sCssUrgente	
			});
			$cajaTexto.before(sHTML)
			break;

		}
	}