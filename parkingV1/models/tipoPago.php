<?php 
require_once '../db/conexion.php'; 

class t_pago{
	public function consultarPago($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM tipopagocarro WHERE descripcionTipopago = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarPago($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO tipopagocarro SET descripcionTipopago = '$dato'";
		return $result = mysqli_query($conexion,$sql);
	}

	public function updatePago($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE tipopagocarro SET descripcionTipopago = '$dato[0]' WHERE descripcionTipopago = '$dato[1]'";
		return $result = mysqli_query($conexion,$sql);
	}
}


?>