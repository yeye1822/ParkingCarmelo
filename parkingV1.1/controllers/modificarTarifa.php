<?php 
require_once '../models/t_tarifa.php';
require_once '../models/MconsInusuales.php';

$tarifa = $_POST['t_tarifa'];
$obj = new t_tarifa();
$consult = $obj->consultarTarifa($tarifa);

$obj1 = new conInusuales();
$consultStatus = $obj1->consultarEst();

if($consult[0] != ''){
	require_once '../views/modificarTarifa.php';
}else{
	echo "<script>alert('La tarifa no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/tarifa.php';
}

 ?>
