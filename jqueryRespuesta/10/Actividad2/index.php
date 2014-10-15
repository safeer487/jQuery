<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<title></title>
	<style>
	div#container{
		width:250px;
		margin: 0 auto;
	}
	input{	
		padding:5px;
	}
	#submit{
		padding:5px;
	}
	.registrado{
		color:green;
	}
	.noRegistrado{
		color:red;
	}
	.red{
		border-color: red;
	}
	.green{
		border: 2px solid green;
	}

	</style>
</head>
<body>
	<div id="container">
	<h3>Sign in using ajax</h3>
	<p id="parrafo"></p>
	<input id="email" type="email" name="email" placeholder="Email">
	<input id="username" type="text" name="username" placeholder="alias">
	<input id="pass" type="password" name="password" placeholder="password"><br>
	<button id="submit">Enter</button><br>
	</div>
	

	<script>
	
	
	var $botonSubmit = $('#submit');
	var $parrafo = $('#parrafo')
	var $inputEmail = $('#email')

	$inputEmail.keyup(function(event){
	var sEmail = $('#email').val();
	var username = $('#username').val();
	var pass = $('#pass').val();
		
	$.post('recoger.php',{
		'email': sEmail,
		'username' : username,
		'password' : pass
	}, function(respuesta){
		switch(respuesta){
			case '0':
				$parrafo.addClass("noRegistrado").html('No has registrado')
				$('#email').addClass("red")
				$('#username').addClass("red")
				$('#pass').addClass("red")
				console.log('No registrado')
				break;
			case '1':
				$parrafo.removeClass("noRegistrado")
				$parrafo.addClass("registrado").html('Has registrado ya')
				$('#email').removeClass("red")
				$('#email').addClass("green")
				$('#username').removeClass("red")
				$('#username').addClass("green")
				$('#pass').removeClass("red")
				$('#pass').addClass("green")
				console.log('Registrado')
				break;
		}
		
	});	
});



	</script>
</body>
</html>