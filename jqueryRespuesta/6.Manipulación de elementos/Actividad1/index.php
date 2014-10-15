<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<title></title>
</head>
<body>
<div id="parrafo"></div>
<button id="MoGuardar" onclick="modificar()"></button>
<input id="inputpass" type="text" onkeypress="verificar()">


<script>
	
		var iLimit = 10;
		var $parrafo = $('<p>Color de cielo es amarillo</p>');
		var sText = "Color de cielo es amarillo";
		$('#parrafo').append($parrafo);

		var $modificar =  $('<em>Modificar</em>');
		var $Guardar = $('<em>Guardar</em>');

		$('#MoGuardar').append($modificar);

		function modificar(){
			$('#parrafo').text('');
			var $input = $('<input type="text" id="inputNuevo"/>');
			$('#parrafo').append($input);
			$('#inputNuevo').val(sText);
			$('#MoGuardar').text('')
			$('#MoGuardar').append($Guardar);
			$('#MoGuardar').attr('onclick', 'Guardar()')
			$('#inputNuevo').css({
				'display': 'inline'
			})
		}
		function Guardar(){
			$inputNuevo = $('#inputNuevo');
			$('#parrafo').append($inputNuevo.val());
			$inputNuevo.css({
				'display': 'none'
			})
			$('#MoGuardar').text('')
			$('#MoGuardar').append($modificar);
		}
		function verificar(){
			if ($('#inputpass').val().length > iLimit) {
				$('#inputpass').attr('type','password');

			};
		}













</script>


</body>
</html>