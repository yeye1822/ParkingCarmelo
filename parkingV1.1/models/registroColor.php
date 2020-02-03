<?php 
require_once '../db/conexion.php';

class registroC{
	public function insertarDato($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO colorcarro(descripcionColor,fechaColor) VALUES ('$dato[0]','$dato[1]')";
		return $result = mysqli_query($conexion,$sql);
	}

	public function consultarDato($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT descripcionColor FROM colorcarro WHERE descripcionColor = '$datos'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function modificarDato($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE colorcarro SET descripcionColor = '$dato[0]',fechaColor = '$dato[1]' WHERE descripcionColor = '$dato[2]'";
		return $result = mysqli_query($conexion,$sql);
	}

}

 ?>