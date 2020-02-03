<?php 

class dashboard{

	public function estructura_head(){
		?>
			<!DOCTYPE html>
				<html lang="es">
				  <head>
				  	<title>Parking Carmelo</title>
				    <meta charset="utf-8">
				    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, minimun-scale=1.0">

				    <link rel="icon" type="image/png" href="libraries/image/Banner.png"/>

				    <!-- Bootstrap CSS -->
				    <!-- <link rel="stylesheet" href="libraries/css/bootstrap.css"> -->
				    <link rel="stylesheet" href="libraries/css/menuEstilo.css">
				     <link rel="stylesheet" type="text/css" href="libraries/css/font-awesome.min.css">
				    <script type="text/javascript" src="libraries/js/funciones.js"></script>
					<!--Inicio estilo menu configuración-->
					<link rel="stylesheet" type="text/css" href="libraries/css/demoConf.css" />
			        <link rel="stylesheet" type="text/css" href="libraries/css/configuracion.css" />
					<script type="text/javascript" src="libraries/js/configuracion.js"></script>
					<!--prueba boostrad 4-->

					<!--Script</!-->
					<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
					<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

					<!--Estilos-->
					<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
					<!--Fin prueba boostrad 4-->
						
					<!--Fin Menu configuracion-->
				    <link rel="stylesheet" type="text/css" href="libraries/css/estilo.css">
				    <script type="application/javascript" src="libraries/js/awesomechart.js"></script>
				    <script src="libraries/js/jquery.min.js"></script>
				    <script type="text/javascript" src="libraries/js/ajax.js"></script>
				  </head>
		<?php
	}


	public function menu(){
		?> 
			<body onLoad="window_onload();">
			  <!-- menú de navegación -->
			  <!--<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top" id='menu'>
			    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    </button>
			    <a class="navbar-brand" href="index.html">
			    <img src="libraries/image/banner.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Parking Carmelo|">
			    Parking Carmelo
			    </a>
			    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			      <div class="navbar-nav mr-auto ml-auto text-center">
			        <a class="nav-item nav-link " href="Dashboard">Dashboard</a>
			        <a class="nav-item nav-link " href="Pago">Pagos</a>
			        <a class="nav-item nav-link" href="Configuracion">Configuración</a>
			        <a class="nav-item nav-link" href="controllers/cerrar.php">Salir</a>
			      </div>
			      <div class="d-flex flex-row justify-content-center">-->
			        <!--<img src="images/Facebook.png" width="30" height="30" class="d-inline-block align-top" style='margin-right: 10px'>
			        <img src="images/twitter.png" width="30" height="30" class="d-inline-block align-top" >
			        <a href="#" class="btn btn-outline-primary mr-2">F</a>
			        <a href="#" class="btn btn-outline-danger">t</a>-->
			       <!-- <a class="d-inline-block align-top pt-1 mr-3 text-capitalize" style="color:#fff;"><?php echo explode(' ',$_SESSION['nombreUsuario'])[0].' '.explode(' ',$_SESSION['apellidoUsuario'])[0];  ?></a>
			        <a href="#" class="btn btn-outline-primary  text-uppercase"><?php echo str_split($_SESSION['nombreUsuario'])[0].'.'.str_split($_SESSION['apellidoUsuario'])[0]; ?></a>
			      </div>
			    </div>
			  </nav>-->
			  <!-- fin menú de navegación -->
			  <div id="mensaje">
		      	<?php 
		      		@$mensaje = $_GET['mensaje'];
		      		if(@$mensaje != ''){
		      			echo "<script>mensaje('$mensaje');</script>"; 
		      		} 
		      	?>	
		     </div>
		<?php
	}

	public function MenuDos(){
	?>	
			<body onLoad="window_onload();">
			  <!-- menú de navegación -->
			  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm sticky-top" id='menu'>
			    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			    </button>
			    <a class="navbar-brand" href="index.html">
			    <img src="libraries/image/banner.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Parking Carmelo|">
			    Parking Carmelo
			    </a>
			    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			      <div class="navbar-nav mr-auto ml-auto text-center">
			      	<a class="nav-item nav-link active" href="Inicio">Inicio</a>
			      	<a class="nav-item nav-link " href="Comentarios">Comentarios</a>
			        <a class="nav-item nav-link " href="Login">Login</a>			
			      </div>
			    </div>
			  </nav>
			  <!-- fin menú de navegación -->

			  <div id="mensaje">
		      	<?php 
		      		@$mensaje = $_GET['mensaje'];
		      		if(@$mensaje != ''){
		      			echo "<script>mensaje('$mensaje');</script>"; 
		      		} 
		      	?>	
		     </div>
	<?php
	}

	public function graficasDashboard(){
		?>
			<section class="container-fluid fondo" >
			    <div class="row" >
			    	<?php require_once 'controllers/porcentajeDashboard.php'  ?>

			      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 cont">
			         <canvas id="canvas1" width="345" height="345">
			          Your web-browser does not support the HTML 5 canvas element.
			        </canvas>
			      </div>

			      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 cont">
			      	<?php 
			          echo "<h1 id='hora'></h1>";
			          switch (date('N')) {
			          	case 1: $dia = "Lunes"; break;
			          	case 2: $dia = "Martes"; break;
			          	case 3: $dia = "Miercoles"; break;
			          	case 4: $dia = "Jueves"; break;
			          	case 5: $dia = "Viernes"; break;
			          	case 6: $dia = "Sabado"; break;
			          	default: $dia = "Domingo"; break;
			          }
			         
			          echo "<h4>".$dia."  ".date('d')." de ".date('F')." ".date('Y')."</h4>";
			         ?>
			      </div>

			     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 cont">
			        <canvas id="canvas6" width="345" height="345">
			          Your web-browser does not support the HTML 5 canvas element.
			        </canvas>
			      </div>
			      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 cont">
			          <canvas id="canvas4" width="345" height="345">
			            Your web-browser does not support the HTML 5 canvas element.
			          </canvas>
			      </div>
			      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 cont">
			          <canvas id="canvas5" width="345" height="345">
			            Your web-browser does not support the HTML 5 canvas element.
			          </canvas>
			      </div>
			      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 cont">
			      	<canvas id="canvas3" width="345" height="345">
			          Your web-browser does not support the HTML 5 canvas element.
			        </canvas>
			      </div>
			    </div>
			     <script type="application/javascript" src="libraries/js/grafic.js"></script>
			</section>
  <!-- fin Formulario 1 -->
		<?php
	}

	public function estructura_pie(){
		?>
	
			<div class="container-fluid bg-inverse text-white pt-2 pb-2" id='pie'>
			    <div class="text-center" >
			      <p class="lead">Copyright © 2018
			      <a class="text-white" href="#"><button class="btn btn-danger">Parking Carmelo</button></a></p>
			    </div>
			  </div>    

			    <!-- jQuery first, then Tether, then Bootstrap JS. -->
			    <script src="libraries/js/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			    <script src="libraries/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			    <!-- <script src="libraries/js/bootstraps.min.js"></script> -->
			  </body>
			</html>
		<?php
	}

	public function estructura_pie2(){
		?>
	  
			    <!-- jQuery first, then Tether, then Bootstrap JS. -->
			    <script src="libraries/js/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			    <script src="libraries/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			    <script src="libraries/js/bootstraps.min.js"></script>
			  </body>
			</html>
		<?php
	}
}

 ?>