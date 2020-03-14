<?php 
date_default_timezone_set('America/Bogota');
require_once '../models/inicioModel.php'; 

$placa = strtoupper($_POST['placa']);
$fecha = date('Y-m-d H:i:s');
$tipoIngreso = $_POST['tipoEntrada'];
$comentario = ''; 

$obj = new inicioModel();
$consulta = $obj->mostrarDatos($placa);

if($consulta[0] != ''){
	$datos = array($fecha, $consulta[0], $tipoIngreso, $fecha, "", "", "Normal", "", "1");
}else{
	$datos = array($fecha, "2", $tipoIngreso, $fecha, "", "", "Inusual", $placa, "1");
}

if($tipoIngreso == 1){ 
	$idRegistro = $obj->checkRegistry($datos);

	if($idRegistro != ""){

		if($idRegistro[1] == 0){
			if($obj->updateRegistry($datos, $idRegistro[0]) == 1){
				header("Location:../index.php?id=Inicio&mensaje=1_Registro Actualizado Satisfactoriamente");
				return;
			}
		}else{
			header("Location:../index.php?id=Inicio&mensaje=0_El vehículo no se encuentra en el establecimiento");
		}
			
	}else{
		
		header("Location:../index.php?id=Inicio&mensaje=0_El vehículo no se encuentra en el establecimiento o es un vehículo Inusual, el pago lo tiene que realizar en la pestaña pago o en la imagen inferior derecha de color amarillo");
	}
}else{
	if($obj->insertarDatos($datos) == 1){
		header("Location:../index.php?id=Inicio&mensaje=1_Registro Ingresado Satisfactoriamente");
	}else{
		header("Location:../index.php?id=Inicio&mensaje=0_Error al ingresar el registro");
	}
}	
