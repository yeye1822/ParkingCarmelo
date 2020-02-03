<?php 
require_once '../models/carroceria.php';

$t_carro = $_POST['t_carro'];
$obj = new t_carro();
$consult = $obj->consultarCarr($t_carro);

if($consult[0] != ''){
	require_once '../views/modificarT_carro.php';
}else{
	echo "<script>alert('El Tipo de carroceria no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/t_carro.php';
}



 ?>