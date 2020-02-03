<?php

require_once 'db/conexion.php';

class InformCar{
	public function carInusual($fecha){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT rc.placaInusual, rc.fechaEntrada, rc.fechaSalida, rc.idConceptoFK, rc.PagoCarro, cp.ValorConcepto FROM registrocarro rc INNER JOIN conceptoparq cp ON rc.idConceptoFK = cp.idParq WHERE rc.Inusual = 'Inusual' AND rc.PagoCarro = 0 ORDER BY rc.fechaEntrada DESC;

		-- date(rc.fechaEntrada) = '$fecha'";

		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}

	public function carMensual($fecha){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT pc.placaCarro, rc.fechaEntrada, rc.fechaSalida FROM registrocarro rc INNER JOIN parqcarros pc ON rc.idCarroPK = pc.idCarro WHERE rc.Inusual = 'Normal' AND date(rc.fechaEntrada) = '$fecha'";

		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}
}