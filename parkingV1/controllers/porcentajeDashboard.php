<?php 
require_once 'models/porcentajeDash.php';
$obj = new porcentajeDash();
$entrada = $obj->entradaPorc();
$salidas = $obj->salidaPorc();
$visitas = $obj->visitaPorc();
$total = ($entrada[0] + $salidas[0] + $visitas[0])/100;

if($total == 0){
	$total = 1;
}

require_once 'views/porcentajesDashboard.php';

 ?>