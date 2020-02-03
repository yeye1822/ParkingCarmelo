<?php 
require_once '../models/T_tarifa.php';

$tarifaD = $_POST['tarifaD'];
$tarifa = $_POST['tarifa'];
$estado = $_POST['estado'];
$op = $_POST['op'];
$datos = array($tarifa,$estado,$tarifaD);

$obj = new t_tarifa();

if($op == 1){
	if($obj->updateTarifa($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_Registro Modificada Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al Modificar el registro");
	}
}else{
	if($obj->consultarTarifa($tarifa)[0] != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertarTarifa($datos) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
		
	}
}

 ?>