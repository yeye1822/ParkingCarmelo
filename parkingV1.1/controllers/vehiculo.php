<?php 
require_once '../models/vehiculo.php';

$usuario = $_POST['usuario'];
$placa = $_POST['placa'];
$fechaIngreso = $_POST['fechaIngreso'];
$fechaP = $_POST['fechaP'];
$marca =$_POST['marca'];
$linea = $_POST['linea'];
$color = $_POST['color'];
$carroceria = $_POST['carroceria'];
$estado = $_POST['estado'];
$valor = $_POST['valor'];
$t_pago = $_POST['tpago'];

$datos = array($usuario,$placa,$fechaIngreso,$fechaP,$marca,$linea,$color,$carroceria,$estado,$valor,$t_pago);

echo "<script>console.log(".var_dump($datos).");</script>";


$obj = new Vehiculo();

if($_GET['op'] == 1){
	if($obj->actualizarVehiculo($datos) == 1){
		header("Location:../index.php?id=Configuracion&mensaje=1_El Registro se Actualizo Correctamente");
	}else{
		header("Location:../index.php?id=Configuracion&mensaje=0_Error al actualizar el registro");
	}
}else{
	if($obj->consultarVehiculo($placa)[0] != ''){
		header("Location:../index.php?id=Configuracion&mensaje=0_Error el Vehiculo ya Existe");
	}else{
		if($obj->insertarVehiculo($datos) == 1){
			header("Location:../index.php?id=Configuracion&mensaje=1_Registro Ingresado Correctamente");
		}else{
			header("Location:../index.php?id=Configuracion&mensaje=0_Error al ingresar el registro");	
		}
	}
}

 ?>