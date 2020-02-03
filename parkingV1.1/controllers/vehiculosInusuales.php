<?php 
@$id = $_POST['id'];
@$con = $_POST['con'];

if($id != ''){
	require_once '../models/MconsInusuales.php';
	$obj = new conInusuales();
	$datos = array($con,$id);
	
	if($obj->updateRegistro($datos) == 1){
		require_once '../views/nuevosVehiculos.php';
	}
}else{
	require_once 'models/consInusuales.php';
	$obj = new conInusuales();
	$consult = $obj->mostrarDatosInusuales();
	$result = $obj->mostrarConcepto();
	require_once 'views/ingresarComentarios.php';	
}



 ?>