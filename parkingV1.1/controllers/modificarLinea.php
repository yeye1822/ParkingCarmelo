<?php 	

require_once '../models/linea.php';
require_once '../models/MconsInusuales.php';

$linea = $_POST['linea'];
$obj = new lineaMar();
$cons = $obj->consultarLinea($linea);

$objEmblema = new conInusuales();
$consult = $objEmblema->consultarEmblema1(); 

if($cons[0] != ''){
	require_once '../views/modificarLinea.php';
}else{
	echo "<script>alert('El Usuario no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/linea.php';
}




 ?>