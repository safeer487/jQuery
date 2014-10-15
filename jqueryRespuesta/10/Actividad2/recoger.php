<?php 

if ($_POST) {
	$sEmail = $_POST['email'];
	$sUsuario = $_POST['username'];
	$sPassword = $_POST['password'];
	
	
	require_once 'BD.class.php';
	$miDB = new DB();
	$sSQL = "SELECT * FROM usuarios WHERE email = '$sEmail'";
	$aResul = $miDB->obtenerResultado($sSQL);
	foreach ($aResul as $value) {
		$email = $aResul[0][1];
		$alias = $aResul[0][2];
		$pass = $aResul[0][3];
	

	}
	
	if ($miDB->contarResultadosQuery($sSQL) > 0) {
		echo "1";
	}else{
		echo "0";
	}

	
}




 ?>