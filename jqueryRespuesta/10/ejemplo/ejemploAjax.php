<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="contenedor">
		
	</div>
	<button id="botonVer">Ver resultados</button>

<!-- evento cualquer accion que haga el usuario -->
	<script>
	
	

	//Controlador
	var $botonVer = $('#botonVer')
	$botonVer.on('click', function(event){

		cogerResultados()
	});

	//Modelo
	var $contenedor = $('#contenedor')
	function cogerResultados(){
		
		$.get('obtenerResultado.php', function(data){
			$contenedor.append(data)
		});
	}

	</script>
</body>
</html>