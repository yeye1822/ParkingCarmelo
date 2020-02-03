<?php  
require_once '../models/inicioModel.php'; 
$placa = $_POST['placa'];
$fecha = $_POST['fecha'];
$tipoIngreso = $_POST['tipoEntrada'];
$comentario = '';
$id = 'Normal';  

$obj = new inicioModel();
$consulta = $obj->mostrarDatos($placa);

if($consulta[0] != ''){
	$datos = array($fecha,$consulta[0],$tipoIngreso,$id);

	if($obj->insertarDatos($datos) == 1){
		header("Location:../index.php?mensaje=1_Registro Ingresado Satisfactoriamente");
	}else{
		header("Location:../index.php?mensaje=0_Error al ingresar el registro");
	}
}else{
	$datos = array($fecha,2,$tipoIngreso,'Inusual',$placa,"1");

	if($obj->insertarDatosI($datos) == 1){
		header("Location:../index.php?mensaje=1_Registro Ingresado Satisfactoriamente");
	}else{
		header("Location:../index.php?mensaje=0_Error al ingresar el registro");
	}
}



 ?>