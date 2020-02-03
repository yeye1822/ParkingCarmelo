<?php 
require_once '../models/tipoPago.php'; 

$pago = $_POST['t_pago'];
$t_pagoD = $_POST['t_pagoD'];
$op = $_POST['op'];
$datos = array($pago,$t_pagoD);

$obj = new t_pago();

if($op == 1){
	if($obj->updatePago($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_El pago fue Actualizado Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al Actualizar el registro");
	}

}else{
	if($obj->consultarPago($pago)[0] != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el registro ya existe");
	}else{
		if($obj->insertarPago($pago) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");
		}
		
	}
}

 ?>