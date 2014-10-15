<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title></title>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<style>
	div#images{
		width:700px;
		height:300px;
		margin:0 auto;
		margin-top: 50px;
	}
	div#generar{
		width:400px;
		height: 400px;
		background-color: green;
		position:absolute;
		top: 100px;
		left:400px;
		visibility: hidden;
	}
	div#content{
		background-color: yellow;
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
	}
</style>
</head>
<body>
<div id="content">
<div id="images">
	
	<img src="samurai2.gif"  alt="" width="200px" height="200px" onclick="expand('samurai2.gif')">
	
	<img src="Samurai3.jpg"  alt="" width="200px" height="200px" onclick="expand('Samurai3.jpg')">

	<img src="samurai4.jpg"  alt="" width="200px" height="200px" onclick="expand('samurai4.jpg')">
	</div>
	<div id="generar"></div>

</div>
<script>

 	//$(document).ready(expand());
 	

 	function expand(insRuta) {
		$('#generar').css({
		'visibility' : 'visible',
		'background-image': 'url("' + insRuta + '")',

		});
 	}
 	function backgroundExpand(){
 		

 		
 	}




</script>

	
</body>
</html>