<?php 
require_once '../db/conexion.php';
require_once '../models/pagoVehiculo.php';

$obj = new pagoVehiculo();

$fechaPago = $_POST['fechaPago'];
$placaPago = $_POST['placaPago'];
$idPlaca = $_POST['idPlaca'];
$fechaReal = date('Y-m-d H:i:s');

$datos = array($idPlaca,$fechaPago,$fechaReal);

if($obj->consultarVeh($datos)[0] != ''){
	if($obj->deleteRegistro($datos) == 1){
		echo 'se eliminara registro';
	}else{
		echo 'error al eliminar';
	}	
}else{
	if($obj->insertRegistro($datos) == 1){
		echo 'se insertara registro';
	}else{
		echo 'error al insertar';
	}
}

 ?>