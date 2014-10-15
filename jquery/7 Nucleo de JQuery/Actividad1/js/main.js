//Variables
var $letra = $('#letra');
var $mostrar = $('#mostrar');
var $intentos = $('#intentos');
var aSolucion = new Array();
aSolucion.push('a');
aSolucion.push('v');
aSolucion.push('i');
aSolucion.push('n');
aSolucion.push('n');
var aMostrar = new Array();
aMostrar.push('_');
aMostrar.push('_');
aMostrar.push('_');
aMostrar.push('_');
aMostrar.push('_');


$mostrar.html(aMostrar.join(' '));
var iError = 5;
$intentos.text(iError);


//Logica
var comprobar = function() {
	if(iError > 0) {
		//Comprobamos si la letra pertenece a la solucionabo
		var sLetra = $letra.val()..
		var iPos = $.inArray(sLetra, aSolucion);
		//Si es distinto de -1, esta dentro del array
		if(iPos != -1) {
			for (var i = 0; i < aSolucion.length; i++) {
				if(aSolucion[i] == sLetra) {
					aMostrar[i] = sLetra;
				}
			}
		} else {//Si -1: no esta, y quito un intento
			iError--;
		}

		//Muestra el array que se resuelve
		$mostrar.text(aMostrar.join(' '));
		$intentos.text(iError);
		$letra.val('');
	} else {
		alert('Has perdido');
	}
}