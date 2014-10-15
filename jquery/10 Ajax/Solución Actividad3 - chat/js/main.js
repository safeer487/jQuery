//Variables
var $cajonMensajes = $('#cajonMensajes');
var $nuevoMensaje = $('#nuevoMensaje');
var $botonEnviar = $('#botonEnviar');
var $nombre = $('#nombre');

$botonEnviar.click(function(event) {
	//Obtenemos el texto
	var sNueMen = $nuevoMensaje.val();
	//Borramos el contenido
	$nuevoMensaje.val('');
	//Enviamos por post
	//$.post para enviar un post con Ajax:
	//3 parametros: 1- Ruta PHP donde se envía
	//2- datos que envio (con estructura JSON)
	// -> $_POST['nombre'] y $_POST['mensaje']
	// 3 - Respuesta, cualquier echo del PHP
	$.post('insertarMensaje.php', {
		'nombre': $nombre.val(),
		'mensaje': sNueMen
	}, function(respuesta) {
		console.log(respuesta);
	});
});

var bScroll = true;
var refrescarMensajes = function() {
	$.get('mensajes.php', function(respuesta) {
		$cajonMensajes.html(respuesta);
	});
	//Scroll abajo
	$cajonMensajes.hover(function() {
		bScroll = false;
	}, function() {
		bScroll = true;
	});
	if(bScroll) $cajonMensajes.scrollTop($cajonMensajes[0].scrollHeight);
}

setInterval('refrescarMensajes()', 200);
