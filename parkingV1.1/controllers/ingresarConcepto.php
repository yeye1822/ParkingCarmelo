<?php 
require_once '../models/conceptosConf.php';
$concepto = $_POST['concepto'];
$conceptoD = $_POST['conceptoD'];
$op = $_POST['op'];

$obj = new conceptoConf();


if($op == 1){

	$datos = array($concepto,$conceptoD);
	if($obj->updateConcep($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_Concepto Modificado Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}
}else{
	if($obj->consultConcep($concepto) != ""){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertConcep($concepto) == 1){	
			header("Location:../index.php?id=Configuracion&mensaje=1_Concepto Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
	}
}

 ?>