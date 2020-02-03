<?php 
require_once '../db/conexion.php';

class t_carro{
	public function consultarCarr($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM tipocarro WHERE descripcionTipo = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarCarro($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO tipocarro SET descripcionTipo = '$dato'";
		return $result = mysqli_query($conexion,$sql);
	}

	public function modificarCarro($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE tipocarro SET descripcionTipo = '$dato[0]' WHERE descripcionTipo = '$dato[1]'";
		return $result = mysqli_query($conexion,$sql);
	}
}

?>