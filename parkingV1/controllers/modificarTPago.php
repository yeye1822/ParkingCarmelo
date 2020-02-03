<?php 

require_once '../models/tipoPago.php';

$pago = $_POST['pago'];
$obj = new t_pago();
$consult = $obj->consultarPago($pago);

if($consult[0] != ''){
	require_once '../views/modificarPago.php';
}else{
	echo "<script>alert('El Tipo de Pago no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/T_pago.php';
}

 ?>