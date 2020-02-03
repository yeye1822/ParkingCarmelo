<?php 
require_once 'db/conexion.php';

class porcentajeDash{
	public function entradaPorc(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE idSecuencia = 2 and Inusual = 'Normal' and date(fechaRegistro) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function salidaPorc(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE idSecuencia = 1 and Inusual = 'Normal' and date(fechaRegistro) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function visitaPorc(){
		$fecha = date('Y-m-d');
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT count(idCarroPK) FROM registrocarro WHERE Inusual = 'Inusual' and date(fechaRegistro) = '$fecha'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}
}

 ?>
