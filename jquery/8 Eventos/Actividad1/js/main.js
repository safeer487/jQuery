
//Variables
$body = $('body');
$boton1 = $('#boton1');
$boton2 = $('#boton2');
$contador = $('#contador');

$boton1.click(function() {
	$contador.text(parseInt($contador.text()) + 1);
});

$boton2.click(function() {
	$contador.text('0');
});

$boton2.hover(function() {
	$body.addClass('muerte');
}, function() {
	$body.removeClass('muerte');
});