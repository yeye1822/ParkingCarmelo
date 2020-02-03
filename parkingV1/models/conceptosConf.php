<?php 
require_once '../db/conexion.php';

class conceptoConf{

	public function consultConcep($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM conceptoparq WHERE descripcionParq = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertConcep($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO conceptoparq (descripcionParq) VALUES ('$dato')";
		return $result = mysqli_query($conexion,$sql);
	}

	public function updateConcep($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE conceptoparq  SET descripcionParq = '$dato[0]' WHERE descripcionParq = '$dato[1]'";
		return $result = mysqli_query($conexion,$sql);
	}

}
 ?>
