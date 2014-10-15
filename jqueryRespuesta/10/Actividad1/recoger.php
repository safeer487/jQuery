<?php 
require_once "BD.class.php";
$miDB = new DB();
$sSQL = "SELECT * FROM parrafo";
$sResul = $miDB->obtenerResultado($sSQL);
foreach ($sResul as $parrafo) {
	 echo $parrafo[1];
}







 ?>