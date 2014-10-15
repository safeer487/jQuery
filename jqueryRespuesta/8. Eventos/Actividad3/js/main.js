
//Variables
var $body = $('body');
var $cuadro = $('#cuadro');

$body.click(function(e) {
	switch(e.which) {
		case 1:
			$cuadro.css('width', '+=20');
			$cuadro.css('height', '+=20');
		break;
		case 2:
			$cuadro.css('width', '-=20');
			$cuadro.css('height', '-=20');
		break;
	}
	
});

