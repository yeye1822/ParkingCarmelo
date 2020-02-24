<?php 

class pagoVehiculo{
	public function consultarVehivulo(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT idCarro, placaCarro FROM parqcarros WHERE 1 ORDER BY placaCarro DESC";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}

	public function consultarVeh($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM pagoscarro WHERE placaPagoFK = '$datos[0]' and fechaPago = '$datos[1]'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertRegistro($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO pagoscarro SET placaPagoFK = '$datos[0]',fechaPago = '$datos[1]',fechaReal = '$datos[2]'";
		return $result = mysqli_query($conexion,$sql);
	}

	public function deleteRegistro($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		echo $sql = "DELETE FROM pagoscarro WHERE placaPagoFK = '$datos[0]' AND fechaPago = '$datos[1]'";
		return $result = mysqli_query($conexion,$sql);
	}

	public function modificarIngreso($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE registrocarro SET idSecuenciaSalida = '$datos[1]', fechaSalida = '$datos[2]', idConceptoFK = '$datos[3]', PagoCarro = '$datos[4]', amount = '$datos[5]' WHERE idRegistro = '$datos[0]'";
		return $result = mysqli_query($conexion,$sql);
	}

}

 ?>