<?php

class ModelConcept{

	public function montrerConcept(){
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "SELECT s.idParq, s.descripcionParq, s.ValorConcepto, e.descripcionEstado FROM conceptoparq s INNER JOIN parqestado e ON e.idEstado = s.statusConcept WHERE s.idParq <> 1";
		$resultat = mysqli_query($connecter, $sql);
		return mysqli_fetch_all($resultat);
	}

	public function selectConcept($id){
		require_once '../db/conexion.php';
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "SELECT * FROM conceptoparq WHERE idParq = '$id'";
		$resultat = mysqli_query($connecter, $sql);
		return mysqli_fetch_row($resultat);
	}

	public function getConcept($data){
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "INSERT INTO conceptoparq SET descripcionParq = '$data[0]', ValorConcepto = '$data[1]', statusConcept ='$data[2]'";
		return mysqli_query($connecter,$sql);	
	}

	public function getStatus(){
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "SELECT * FROM parqestado";
		$result = mysqli_query($connecter, $sql);
		return mysqli_fetch_all($result);
	}

	public function updateStatus($id, $status){
		require_once '../db/conexion.php';
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "UPDATE conceptoparq SET statusConcept ='$status' WHERE idParq = '$id'";
		return mysqli_query($connecter,$sql);
	}

	public function updateConceptData($data){
		$connexion = new conectar();
		$connecter = $connexion->conexion();
		$sql = "UPDATE conceptoparq SET descripcionParq = '$data[0]', ValorConcepto = '$data[1]', statusConcept ='$data[2]' WHERE idParq = '$data[3]'";
		return mysqli_query($connecter, $sql);
	}
}