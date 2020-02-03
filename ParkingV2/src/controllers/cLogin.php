<?php 
require_once '../models/mLogin.php';

$username = $_POST['txtUsername'];
$password = md5(sha1($_POST['txtPassword']));

$object = new Loguin();
$queryData = $object->showData($username);

$dataPassword = array($queryData[0], $password);
$queryPassword = $object->consultPassword($dataPassword);

if($queryData[3] == 2){
	// header("Location:../Login&mensaje=0_El Usuario esta Inactivo o no Existe");
	echo "Esta inactivo";
}else{
	if($queryPassword[1] != ''){
		session_start();
		$_SESSION['nombreUsuario'] = $queryData[1];
		$_SESSION['apellidoUsuario'] = $queryData[2];
		echo "Satisfatorio";
		// header("Location:../index.php?id=Dashboard&mensaje=1_Datos Correctos");
	}else{
		echo "contraseña o usuario incorrecto";
		// header("Location:../index.php?id=Login&mensaje=0_Contraseña o Usuario Incorrecto");
	}
}
 