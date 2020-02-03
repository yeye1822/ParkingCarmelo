<?php 
require_once '../models/emblema.php';

$emblema = $_POST['emblemas'];
$emblema1 = $_POST['emblemas1'];
$fecha = $_POST['fechaIngreso'];

$obj = new emblemaPar();
$datos = array($emblema,$fecha,$emblema1);
print_r($datos);

if($_GET['op'] == 1){
	if($obj->updateEmblema($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_El registro se Actualizo correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al Actualizar el registro");
	}
}else{
	if($obj->consultarEmb($emblema)[0] != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertarEmb($datos) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Satisfactoriamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
	}
}

 ?>