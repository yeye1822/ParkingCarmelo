<?php 
class configuracion{

	public function menu(){
		require_once 'models/consInusuales.php';
		$obj1 = new conInusuales();
		$consultStatus = $obj1->consultarEst(); 
		$consult = $obj1->consultarEmblema();
		?>
		
		<section class="tabs mt-3">
			<input type="hidden" id='hora' name="">
				<?php require_once 'menuConf.php'; ?>
		        <div class="content">
			        <?php 
			        	require_once 'usuarios.php';
			        	require_once 'vehiculos.php';
			        	// require_once 'emblemas.php';
			        	// require_once 'linea.php';
			        	// require_once 'color.php';
			        	require_once 't_carro.php';
			        	require_once 'tarifa.php';
			        	require_once 'T_pago.php';
			        	require_once 'ingresarConcepto.php';
			         ?>
		        </div>
		</section>
		<?php
	}

}
 ?>
