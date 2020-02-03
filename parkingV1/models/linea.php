<?php 
require_once "../db/conexion.php";

class lineaMar{
	public function consultarLinea($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM referenciacarro WHERE descripcionReferencia = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function insertarLinea($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO referenciacarro SET descripcionReferencia = '$datos[1]', fkReferencia = $datos[0]";
		 return $result = mysqli_query($conexion,$sql);
	}

	public function modificarLinea($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "
		UPDATE referenciacarro SET descripcionReferencia = '$datos[1]',fkReferencia = $datos[0] WHERE descripcionReferencia = '$datos[2]'";
		 return $result = mysqli_query($conexion,$sql);
	}
}

 ?>