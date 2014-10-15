<?php 

if($_POST) {
	//Variables
	$sNom = trim($_POST['nombre']);
	$sMen = trim($_POST['mensaje']);
	require_once 'BD.class.php';

	$miBD = new DB();
	$sSQL = "INSERT INTO conversaciones VALUES (NULL, '$sNom', '$sMen', now())";
	$miBD->ejecutarQuery($sSQL);

	echo 'Mensaje enviado';
}
?>