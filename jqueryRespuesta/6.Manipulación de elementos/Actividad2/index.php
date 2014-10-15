<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	<label for="container">
	<select name="img" id="fotos">
			<option value="butterfree">butterfree</option>
			<option value="caterpie">caterpie</option>
			<option value="oddish">oddish</option>
			<option value="pidgeot">pidgeot</option>
			<option value="pikachu">pikachu</option>
			<option value="raichu">raichu</option>
			<option value="weedle">weedle</option>
		</select>
		</label>
		<button id = "anadir" onclick="anadir()">Añadir</button>
	<div id="container">	
	</div>
	<select name="quitar" id="quitar">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
		<button id="eliminar" onclick="eliminar()">Quitar</button>


		
		
	
<script src="js/main.js"></script>
</body>
</html>