<?php 
require_once '../db/conexion.php';

class Vehiculo{
	public function consultarVehiculo($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM parqcarros WHERE placaCarro = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarVehiculo($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO parqcarros (idUsuarioFK,placaCarro,fechaCarro,fechapagoCarro,marcaCarroPK,lineaCarro,colorCarroPK,tipoCarroPK,estadoCarroPK,valorCarro,tipopagoCarroPK) VALUES ($dato[0],'$dato[1]','$dato[2]',$dato[3],$dato[4],$dato[5],$dato[6],$dato[7],$dato[8],$dato[9],$dato[10])";
		return $result = mysqli_query($conexion,$sql);
	}

	public function actualizarVehiculo($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE parqcarros SET idUsuarioFK = $dato[0], placaCarro = '$dato[1]', fechaCarro = '$dato[2]', valorCarro = $dato[9], fechapagoCarro = $dato[3], tipopagoCarroPK = $dato[10], marcaCarroPK = $dato[4], colorCarroPK = $dato[6], tipoCarroPK = $dato[7], estadoCarroPK = $dato[8], lineaCarro = $dato[5] WHERE placaCarro = '$dato[1]'";
		return $result = mysqli_query($conexion,$sql);
	}


}


 ?>