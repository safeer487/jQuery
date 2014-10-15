
var zoom = function(iniImg) {
	$('#ampliada').css('background-image', 'url("' + iniImg + '")');
	$('#fondoNegro').css('visibility', 'visible');
	$('#ampliada').css('visibility', 'visible');
}

var cerrar = function() {
	$('#fondoNegro').css('visibility', 'hidden');
	$('#ampliada').css('visibility', 'hidden');
}