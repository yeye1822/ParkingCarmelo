<?php 
require_once '../models/login.php';

$username = $_POST['username'];
$password = md5(sha1($_POST['password']));

$obj = new loguin();
$consulta = $obj->mostrarDatos($username);
$datos = array($consulta[0], $password);
$datos = $obj->consultarDatos($datos);

if($consulta[3] == 2){
	header("Location:../Login&mensaje=0_El Usuario esta Inactivo o no Existe");
}else{
	if($datos[1] != ''){
		session_start();
		$_SESSION['nombreUsuario'] = $consulta[1];
		$_SESSION['apellidoUsuario'] = $consulta[2];
		header("Location:../index.php?id=Dashboard&mensaje=1_Datos Correctos");
	}else{
		header("Location:../index.php?id=Login&mensaje=0_Contraseña o Usuario Incorrecto");
	}
}


 ?>