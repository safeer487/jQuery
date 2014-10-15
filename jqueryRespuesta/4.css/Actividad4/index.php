<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<style>
		#lienzo{
			width: 300px;
			height: 300px;
			background-color: red;
			margin: 0 auto;
			margin-top: 30px;

		}


	</style>
</head>
<body>
	<div id="lienzo"></div>

	<script type="text/javascript">

	//Variables
	var jsonImg = {
		1 : 'img/1.jpg',
		2 : 'img/2.jpg',
		3 : 'img/3.jpg',
		4 : 'img/4.jpg'
	};
	var $lienzo = $('#lienzo');
	var iCount = 0;
	var iTiempPasar = 1000;
	/**
	 * Método que cambia la imagen del lienzo
	 */
	function pasarImagen(){
		//Equivalente a length con JSON
		if (iCount == Object.keys(jsonImg).length) iCount = 0;
		iCount++;
		$lienzo.css('background-image', 'url(' + jsonImg[iCount + ''] +')');
		
	}


	setInterval('pasarImagen()', iTiempPasar);


	</script>



</body>
</html>