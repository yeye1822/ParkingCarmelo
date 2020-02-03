<?php 
require_once 'db/conexion.php';

class porcentajeDash{
	public function totalInusual(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE Inusual = 'Inusual' and date(fechaEntrada) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function salidaInusual(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE Inusual = 'Inusual' and idSecuenciaSalida = 1 and date(fechaSalida) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function totalMensual(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE Inusual = 'Normal' and date(fechaEntrada) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function salidaMensual(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE Inusual = 'Normal' and idSecuenciaSalida = 1 and date(fechaSalida) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}
}

 ?>
