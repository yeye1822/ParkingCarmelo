<?php 
require_once '../models/registroColor.php';

$color = $_POST['colorD'];
$obj = new registroC();
$consult = $obj->consultarDato($color);

if($consult[0] != ''){
	require_once '../views/modificarColor.php';
}else{
	echo "<script>alert('El Color no existe o el parametro de busqueda esta vacío')</script>";
  	require_once '../views/color.php';
}

 ?>