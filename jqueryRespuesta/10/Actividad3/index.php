<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<style>
	#chatArea{
		width:500px;
		height: 500px;
		margin: 0 auto;
		background-color:#e3e3e3;
		padding: 5px;

	}
	#send{
		background-color:blue;
		color:white;
		width:500px;
		height:50px;
		margin-top:2px;
		margin-left:385px;
		font-weight: bold;
		padding: 5px;
	}


	</style>
</head>
<body>
	<div id="chatArea">
		hola

	</div>
	<input type="text" id="send" placeholder="Start chat">
	
	<script>
	var $body = $('body')
	$body.keydown(function(e) {
	    	if (e.which == 13) {
		    	var texto = $('#send').val()
		    	$.post('consulta.php',{
				'text': texto,
			}, function(respuesta){
	   		

	   		});

	 });

})
	</script>
</body>
</html>