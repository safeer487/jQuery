<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="wrapper">
	<textarea name="messege" id="messege" cols="100" rows="6" placeholder="Escribeee!"></textarea>
	<hr>
	<ul>
		<li> <button id="normalB" onclick="anyadirMensaje(1)">Normal</button></li>
		<li> <button id="importanteB" onclick="anyadirMensaje(2)">Importante</button></li>
		<li> <button id="urgenteB" onclick="anyadirMensaje(3)">Urgente</button></li>
	</ul>
	<hr>
	</div>

	<div id="resultados"></div>



<script src="js/main.js"></script>	
</body>
</html>