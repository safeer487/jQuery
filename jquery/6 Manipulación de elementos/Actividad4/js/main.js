
//Variables
$mensaje = $('#mensaje');
$buzon = $('#buzon');

var anyadirUrgente = function() {
	if($mensaje.val().length != 0) {
		$nuevoHTML = $('<div class="alert alert-danger">' + $mensaje.val() + '</div>');
		$buzon.prepend($nuevoHTML);
		$mensaje.val('');
	}
}

var anyadirImportante = function() {
	if($mensaje.val().length != 0) {
		$nuevoHTML = $('<div class="alert alert-warning">' + $mensaje.val() + '</div>');
		$pos = $('.alert-info').first();
		if($pos.length) {
			$pos.before($nuevoHTML);
		} else {
			$buzon.prepend($nuevoHTML);
		}
		
		$mensaje.val('');
	}
}

var anyadirNormal = function() {
	if($mensaje.val().length != 0) {
		$nuevoHTML = $('<div class="alert alert-info">' + $mensaje.val() + '</div>');
		$buzon.append($nuevoHTML);
		$mensaje.val('');
	}
}