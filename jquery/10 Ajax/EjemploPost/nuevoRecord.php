<?php 

$iRespuesta = 1;
if($_POST) {

	$sNom = trim($_POST['nombre']);
	$iNivel = $_POST['nivel'];

	if(strlen($sNom) <= 20) {
		require 'BD.class.php';
		$miDB = new DB();
		$sSQL = "INSERT INTO marcadores VALUES (NULL, '$sNom', $iNivel, '" . date('Y-m-d') . "');";
		$miDB->ejecutarQuery($sSQL);
		$iRespuesta = 0;
	}
}

echo $iRespuesta;

?>