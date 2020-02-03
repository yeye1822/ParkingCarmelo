<?php 
require_once '../db/conexion.php';

class t_tarifa{
	public function consultarTarifa($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM tarifacarro WHERE valorTarifa = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarTarifa($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO tarifacarro SET valorTarifa = '$dato[0]', estadoTarifa = $dato[1]";
		return $result = mysqli_query($conexion,$sql);
	}

	public function updateTarifa($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE tarifacarro SET valorTarifa = '$dato[0]', estadoTarifa = $dato[1] WHERE valorTarifa = '$dato[2]'";
		return $result = mysqli_query($conexion,$sql);
	}
}


?>