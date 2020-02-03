<?php 
require_once "../models/linea.php";

$emblema = $_POST['emblemas'];
$linea = $_POST['linea'];
$referencia = $_POST['linea1'];
$fecha = $_POST['fechaIngreso']; 

$datos = array($emblema,$linea,$referencia,$fecha);

$obj = new lineaMar();

if($_POST['op'] == 1){
	if($obj->modificarLinea($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_Registro Modificado Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al modificar el registro");
	}
}else{
	if($obj->consultarLinea($linea) != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error La Linea del Vehiculo ya existe");
	}else{
		if($obj->insertarLinea($datos) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al Ingresar el registro");
		}
	}
}

?>