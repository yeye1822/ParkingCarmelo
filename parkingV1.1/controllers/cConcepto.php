<?php

class ControllersConcepto{

	public function mostrarConceptos(){
		$montrerConcept = new ModelConcept();
		return $montrerConcept->montrerConcept();
	}

	public function getConcept(){
		if(!@$_POST['txtDescripcion'] == "" && !@$_POST['txtValor'] == "" && @$_POST['txtId'] == ""){
			$data = array(@$_POST['txtDescripcion'], @$_POST['txtValor'], @$_POST['txtStatus']);
			$getConcept = new ModelConcept();
			return $getConcept->getConcept($data);
		}
		return 0;
	}

	public function getStatus(){
		$getStatus = new ModelConcept();
		return $getStatus->getStatus();
	}

	public function updateConcept($id, $status){
		require_once '../models/mConcepto.php';
		$updateStatus = new ModelConcept();
		return $updateStatus->updateStatus($id, $status);
	}

	public function selectConceptData($id){
		require_once '../models/mConcepto.php';
		$updateStatus = new ModelConcept();
		return $updateStatus->selectConcept($id);
	}

	public function updateConceptData(){
		if(!@$_POST['txtDescripcion'] == "" && !@$_POST['txtValor'] == "" && !@$_POST['txtId'] == ""){
			$data = array(@$_POST['txtDescripcion'], @$_POST['txtValor'], @$_POST['txtStatus'], @$_POST['txtId']);
			$updateConceptData = new ModelConcept();
			return $updateConceptData->updateConceptData($data);
		}
		return 0;	
	}
}