<?php 
require_once '../models/usuarios.php';

$cedula = $_POST['cedula'];
$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$numero = $_POST['telefono'];
$estado = $_POST['estado'];

if($_GET['op'] == 1){
	
	$datos = array($cedula,$nombres,$apellidos,$correo,$numero,$estado);
	$obj = new usuariosForm();

	if($obj->updateUsuario($datos) == 1){
		
		header("Location:../index.php?id=Configuracion&mensaje=1_El usuario se actualizo correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al actualizar el usuario");
	}

}else{
	$fecha = $_POST['fechaIngreso'];
	$datos = array($cedula,$nombres,$apellidos,$correo,$fecha,$numero,$estado);

	$obj = new usuariosForm();

	// if($obj->consultarUsu($cedula)[0] != ''){
	// 	header("Location:../index.php?id=Configuracion&mensaje=0_Error el usuario ya existe");
	// }else{
		if($obj->ingresaUsu($datos) == 1){
			$dts = array($obj->consultarUsu($cedula)[0],md5(sha1($cedula)));
			$obj->ingresarPass($dts);
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
		
	//}

}

 ?>