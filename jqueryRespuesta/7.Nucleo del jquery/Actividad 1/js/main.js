
var sTexto = $('#texto')
var sLetra = $.trim(sTexto.val());
var aRespuesta = new Array('a','v','i','o','n');
var aIntentos = new Array('_','_','_','_','_');
imprimirIntentos()

function imprimirIntentos() {
	var sTextFin = ''
	for(iPos in aIntentos) {
		sTextFin += aIntentos[iPos] + ' '
	}
	$('#respuesta').text(sTextFin);
}


function comprobar(){
	var sLetra = $.trim(sTexto.val());
	if ((sLetra.length == 1)  && isNaN(sLetra)) {
		getPosition(sLetra);
	}else{
		$('#error').append('Oops')
	}
}

function getPosition(elementoQueBusca){
	var sResul = '';
	  
    for (var i = 0; i < aRespuesta.length; i++) {
        if (aRespuesta[i] == elementoQueBusca) {
            aIntentos[i] = elementoQueBusca
           
    	}
	}
	imprimirIntentos();
	
}
function remplazar(){
	
	var search = inarray(sLetra,aRespuesta)
	if (search) {
		console.log(search);
	};

}