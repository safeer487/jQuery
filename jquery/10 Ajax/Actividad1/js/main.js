var bEditando = false;
var $texto = $('#campoTexto');
var $campoEditar = $('#campoEditar');
var $botonEditar = $('#boton');
var $campoCorto = $('#campoCorto');

var editar = function(iniImg) {
	if(!bEditando) {
		$campoEditar.val($texto.text());
		$texto.text('');
		$campoEditar.css('display', 'inline');
		$botonEditar.html('Guardar');
		bEditando = true;
	} else {
		$texto.text($campoEditar.val());
		$botonEditar.html('Editar');
		$campoEditar.css('display', 'none');
		bEditando = false;
	}
}

var cambiarTamanyo = function() {
	if($campoCorto.val().length > 10) {
		$campoCorto.attr('type', 'password');
	}
}