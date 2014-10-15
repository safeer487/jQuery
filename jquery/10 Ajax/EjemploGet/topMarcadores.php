<?php 

require 'BD.class.php';
$miDB = new DB();
$sSQL = 'SELECT nombre, nivel FROM marcadores ORDER BY nivel DESC';
$aResul = $miDB->obtenerResultado($sSQL);

echo '<table>
<tr>
<th scope="col">Nickname</th>
<th scope="col">Level</th>
</tr>';
foreach ($aResul as $key => $value) {
	echo '<tr><td>' . $aResul[$key]['nombre'] . '</td><td>' . $aResul[$key]['nivel'] . '</td>';
}

echo '</table>';

?>