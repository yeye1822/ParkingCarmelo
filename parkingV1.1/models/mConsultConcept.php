<?php

require_once 'db/conexion.php';

class ConsultConcepts{
	public function seeConcept(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM conceptoparq WHERE idParq <> 1";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}

}