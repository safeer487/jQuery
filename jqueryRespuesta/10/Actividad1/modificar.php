<?php  
if (isset($_POST['parrafo'])) {
	$sParrafo = $_POST['parrafo'];

	require_once 'BD.class.php';
	$miDB = new DB();
	$sSQL = "UPDATE parrafo SET text = '$sParrafo' WHERE id=1";
	
	$aResul = $miDB->ejecutarQuery($sSQL);
	foreach ($aResul as $parrafo) {
		echo $parrafo[1];
	}
}
?>