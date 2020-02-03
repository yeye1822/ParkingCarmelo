<?php 
require_once "../db/conexion.php";

class emblemaPar{
	public function consultarEmb($dato){ 
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT descripcionMarca FROM marcacarro WHERE descripcionMarca = '$dato'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}


	public function insertarEmb($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "INSERT INTO marcacarro (descripcionMarca,fechaEmblema) VALUES ('$datos[0]','$datso[1]')";
		return $result = mysqli_query($conexion,$sql);
	}

	public function updateEmblema($datos){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE marcacarro SET descripcionMarca = '$datos[0]', fechaEmblema = '$datos[1]' WHERE descripcionMarca = '$datos[2]'";
		return $result = mysqli_query($conexion,$sql);
	}
}

 ?>