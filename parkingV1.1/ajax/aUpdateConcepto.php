<?php

@$id = $_POST['id'];
@$status = $_POST['status'];

require_once '../controllers/cConcepto.php';

if(isset($_POST['idConcept'])){
	$updateConcept = new ControllersConcepto();
	$data = $updateConcept->selectConceptData($_POST['idConcept']);
	echo $data[0]."|".$data[1]."|".$data[2]."|".$data[3];
	
}else{
	$updateConcept = new ControllersConcepto();

	if($updateConcept->updateConcept($id, $status) == 1){
		echo 1;
	}
}
