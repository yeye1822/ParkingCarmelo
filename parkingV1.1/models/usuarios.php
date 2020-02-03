<?php 
require_once '../db/conexion.php';

class usuariosForm{
	public function ingresaUsu($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		//$sql = "INSERT INTO parqusuarios SET cedulaUsuario = $datos[0], nombreUsuario = '$datos[1]', apllidoUsuario = '$datos[2]',correoUsuario = '$datos[3]',fechaUsuario = '$datos[4]', contactoUsuario = $datos[5], estadoUsuarioPK = $datos[6]";
		$sql = "INSERT INTO parqusuarios SET cedulaUsuario = 99999, nombreUsuario = '$datos[1]', apllidoUsuario = '$datos[2]',correoUsuario = '$datos[3]',fechaUsuario = '$datos[4]', contactoUsuario = $datos[5], estadoUsuarioPK = $datos[6]";
		return $result = mysqli_query($conexion,$sql);
	}

	public function consultarUsu($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM parqusuarios WHERE cedulaUsuario = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function ingresarPass($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO parqpassword SET idUsuarioFK = $dato[0], PasswordP = '$dato[1]'";
		$result = mysqli_query($conexion,$sql);
	}

	public function updateUsuario($dato){
		
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE parqusuarios SET nombreUsuario = '$dato[1]', apllidoUsuario = '$dato[2]', correoUsuario = '$dato[3]', estadoUsuarioPK = '$dato[5]', contactoUsuario = '$dato[4]'
		WHERE cedulaUsuario = '$dato[0]'";
		return $result = mysqli_query($conexion,$sql);
		
	}

}


 ?>