<?php 

require_once 'BD.class.php';

$miBD = new DB();
$sSQL = "SELECT * FROM conversaciones ORDER BY fecha ASC;";
$aResultados = $miBD->obtenerResultado($sSQL);

for($i = 0; $i < count($aResultados); $i++) { 
	echo '<strong>' . $aResultados[$i]['nombre'] . 
	':</strong> ' . $aResultados[$i]['mensajes'] . '<br>';
}

?>