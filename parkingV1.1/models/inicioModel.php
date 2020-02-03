<?php 
require_once '../db/conexion.php';

class inicioModel{

	public function checkRegistry($data){
		$con = new conectar();
		$conexion = $con->conexion();

		if($data[7] == ""){
			$sql = "SELECT idRegistro, idSecuenciaSalida FROM registrocarro WHERE idCarroPK = $data[1]  ORDER BY fechaEntrada DESC LIMIT 1";
		}else{
			$sql = "SELECT idRegistro, idSecuenciaSalida FROM registrocarro WHERE idCarroPK = $data[1] AND placaInusual = '$data[7]' ORDER BY fechaEntrada DESC LIMIT 1";
		}
		
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_row($result);
	}

	public function updateRegistry($data, $id){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "UPDATE registrocarro SET idSecuenciaSalida = '$data[2]', fechaSalida = '$data[0]' WHERE idRegistro ='$id'";
		// echo $sql;
		return mysqli_query($conexion,$sql);
	}

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
		$sql = "INSERT INTO registrocarro(idCarroPK,idSecuenciaEntrada, fechaEntrada,idSecuenciaSalida, fechaSalida,Inusual,placaInusual,idConceptoFK) VALUES ('$datos[1]','$datos[2]','$datos[0]','$datos[4]','$datos[5]','$datos[6]','$datos[7]',1)";
		 return $result = mysqli_query($conexion,$sql);
	}

}
