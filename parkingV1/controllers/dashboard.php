<?php 

require_once 'db/conexion.php';
require_once 'models/consInusuales.php';
require_once 'models/pagoVehiculo.php';
require_once 'views/dashboard.php';
require_once 'views/formInicio.php';
require_once 'views/loguin.php';
require_once 'views/configuracion.php';
require_once 'views/mostrarPagos.php';

$estructura = new dashboard();
session_start();

if (!isset($_SESSION['nombreUsuario'])){
	switch (@$_GET['id']) {
		case 'Login':
			$formLogin = new loguin();
			$estructura->estructura_head();
			$estructura->MenuDos();
			$formLogin->loguin_in();
			$estructura->estructura_pie();
			break;
		case 'Comentarios':
			$formInicio = new formInicio();
			$estructura->estructura_head();
			$estructura->MenuDos();
			require_once 'vehiculosInusuales.php';
			$estructura->estructura_pie2();
			//$formInicio->inicioForm();
			//$estructura->estructura_pie();
			break;
		case 'Inicio':
			$formInicio = new formInicio();
			$estructura->estructura_head();
			$estructura->MenuDos();
			$formInicio->inicioForm();
			$estructura->estructura_pie();
			break;
		default:
			header("Location:Inicio");
			break;
	}
}else{
	switch (@$_GET['id']) {
		case 'Dashboard':
			$estructura->estructura_head();
			$estructura->menu();
			$estructura->graficasDashboard();
			$estructura->estructura_pie();	
			break;
		case 'Configuracion':
			$formConfiguracion = new configuracion();
			$estructura->estructura_head();
			$estructura->menu();
			$formConfiguracion->menu();
			$estructura->estructura_pie();	
			break;
		case 'Salir':
			$estructura->estructura_head();
			$estructura->menu();
			$estructura->estructura_pie();	
			break;	
		case 'Pago':
			$obj = new pagos();
			$estructura->estructura_head();
			$estructura->menu();
			$obj->formularioPagos();
			$estructura->estructura_pie2();
			break;
		default:
		   	header("Location:Dashboard");
			break;
	}
}



 ?>
