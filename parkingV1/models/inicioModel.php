<?php 
require_once '../db/conexion.php';

class inicioModel{
	public function mostrarDatos($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT idCarro FROM parqcarros WHERE placaCarro = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarDatos($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO registrocarro(fechaRegistro,idCarroPK,idSecuencia,Inusual,idConceptoFK) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]',1)";
		return $result = mysqli_query($conexion,$sql);

	}

	public function insertarDatosI($datos){
		$con = new conectar();
		$conexion = $con->conexion();

		$sql = "INSERT INTO registrocarro(fechaRegistro,idCarroPK,idSecuencia,Inusual,placaInusual,idConceptoFK) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

		return $result = mysqli_query($conexion,$sql);

	}
}




 ?>