<?php 
require_once '../models/conceptosConf.php';

$concepto = $_POST['idConcep'];
$obj = new conceptoConf();

if($obj->consultConcep($concepto) != ''){
	require_once '../views/modificarConcepto.php';
}else{
	echo "<script>alert('El Concepto no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/ingresarConcepto.php';
}

 ?>
