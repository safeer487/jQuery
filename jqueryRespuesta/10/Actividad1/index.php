<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>
<body>
	<div id="content">
		<p id="parrafo"></p>
		
	</div>
	<button id="editar">Editar</button>




	<script>
	var sParrafo = ''
	var $botonEditar = $('#editar')
	$botonEditar.on('click', function(event){
		if($botonEditar.html() == 'Editar') {
			$inputNuevo = $('<input>', {
				'id': 'input',
				'type': 'text'
			})
			$('#content').append($inputNuevo);
			$('#parrafo').text('');
			$('#input').val(datos);
			$botonEditar.text('Guardar');
		} else {
			sParrafo = $('#input').val();
				$.post('modificar.php',{
					'parrafo' : sParrafo
				})
			$('#parrafo').append($('#input').val());
			$botonEditar.text('Editar');
			$('#input').remove();
		}
	});

	var $content = $('#content')
	var $parrafo = $('#parrafo')
	var datos;
	function cogerResultados(){
		
		$.get('recoger.php', function(data){
			datos = data
			$parrafo.append(datos)
		});
	}

cogerResultados()

	</script>
	
</body>
</html>