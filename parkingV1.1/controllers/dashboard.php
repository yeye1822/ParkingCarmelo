<?php 

require_once 'db/conexion.php';
require_once 'models/consInusuales.php';
require_once 'models/pagoVehiculo.php';
require_once 'models/mInformes.php';
require_once 'models/mConsultConcept.php';

require_once 'controllers/cInformes.php';
require_once 'controllers/cConsultConcept.php';
require_once 'controllers/cConfig.php';
require_once 'controllers/cConcepto.php';

require_once 'views/dashboard.php';
require_once 'views/formInicio.php';
require_once 'views/loguin.php';
require_once 'views/configuracion.php';
require_once 'views/mostrarPagos.php';
require_once 'views/vInformes.php';
require_once 'views/vInformesInusual.php';

$estructura = new dashboard();
session_start();

if (!isset($_SESSION['nombreUsuario'])){
	switch (@$_GET['id']) {
		case 'Login':
			$formLogin = new loguin();
			$estructura->estructura_head();
			$estructura->MenuDos();
			$formLogin->loguin_in();
			$estructura->estructura_pie2();
			break;
		case 'Comentarios':
			$formInicio = new formInicio();
			$estructura->estructura_head();
			$estructura->MenuDos();
			require_once 'vehiculosInusuales.php';
			$estructura->estructura_pie2();
			break;
		case 'Inicio':
			$formInicio = new formInicio();
			$estructura->estructura_head();
			$estructura->MenuDos();
			$formInicio->inicioForm();
			$estructura->estructura_pie2();
			break;
		case 'InformesInusual':
			$informeInusual = new InformeInusual();
			$estructura->estructura_head();
			$estructura->MenuDos();
			$informeInusual->seeReport();
			$estructura->estructura_pie2();
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
		case 'Config':
			$formConfig = new ControllerConfig();
			$estructura->estructura_head();
			$estructura->menu();
			$formConfig->viewConfig();
			$estructura->estructura_pie2();	
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
		case 'Informes':
			$obj = new Informes();
			$estructura->estructura_head();
			$estructura->menu();
			$obj->informesCar();
			$estructura->estructura_pie2();
			break;
		default:
		   	header("Location:Dashboard");
			break;
	}
}



 ?>
