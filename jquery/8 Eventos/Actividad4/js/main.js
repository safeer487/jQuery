
//Variables
$body = $('body');
$tanque = $('#tanque');

$body.keydown(function(e) {
	switch(e.which) {
		case 38://Arriba
			$tanque.css('transform', 'rotate(0deg)');
			$tanque.css('top', '-=10px');
		break;
		case 40://Abajo
			$tanque.css('transform', 'rotate(180deg)');
			$tanque.css('top', '+=10px');
		break;
		case 39://Derecha
			$tanque.css('transform', 'rotate(90deg)');
			$tanque.css('left', '+=10px');
		break;
		case 37://Izquierda
			$tanque.css('transform', 'rotate(270deg)');
			$tanque.css('left', '-=10px');
		break;
	}
});

