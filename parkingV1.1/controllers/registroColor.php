<?php 
require_once "../models/registroColor.php";

$color = $_POST['color'];
$colorP = $_POST['colorP'];
$fecha = $_POST['fechaIngreso'];
$op = $_POST['op'];

$obj = new registroC();
$datos = array($color,$fecha,$colorP);

if($op == 1){
	if($obj->modificarDato($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_Registro Modificado Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al Modificar el Registro");
	}
}else{
	if($obj->consultarDato($color)[0] != ""){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertarDato($datos) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Satisfactoriamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
	}
}

 ?>