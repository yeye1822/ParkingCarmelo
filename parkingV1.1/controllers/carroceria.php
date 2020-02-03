<?php 
require_once '../models/carroceria.php';

$carroceria = $_POST['carroceria'];
$carroceriaP = $_POST['carroceriaP'];
$op = $_POST['op'];
$dato = array($carroceria,$carroceriaP);

$obj = new t_carro();

if($op == 1){
	if($obj->modificarCarro($dato) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_Registro Actualizado Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al Actualizar el registro");
	}
}else{
	if($obj->consultarCarr($carroceria)[0] != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertarCarro($carroceria) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}	
	}
}

 ?>