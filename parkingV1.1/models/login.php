<?php 
require_once '../db/conexion.php';

class loguin{
	public function mostrarDatos($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT idUsuario,nombreUsuario,apllidoUsuario,estadoUsuarioPK FROM parqusuarios WHERE cedulaUsuario = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);	
	}

	public function consultarDatos($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM parqpassword WHERE idUsuarioFK = $dato[0] AND PasswordP = '$dato[1]'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}


}



 ?>