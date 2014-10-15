<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<style>

img.mario{
	position: absolute;
	left:30px;
	top:80px;
	z-index: 1;
}
img#fondoImg{
	
	
}
input{
	width:100px;
	height: 50px;
	color:green;
	margin-left: 5px;
	font-weight: bold;	
}
	
</style>
</head>
<body>

	<img clas="fondoImg" id="fondo" src="fondo.png" alt="fondo">
	
	<img class="mario" id="mario" src="mario.png" alt="mario">
	<input type="button" value="<=" onclick="alreverse()">
	<input type="button" value="=>" onclick="cambiarElFondo()">

	<script>

	$(document).ready(cambiarElFondo());
	function cambiarElFondo(){
		var $fondo = $('#fondo');
		$fondo.css('margin-left','-=50px')
	}
	function alreverse(){
		$('#fondo').css('margin-left','+=50px')
	}


	</script>


	
</body>
</html>