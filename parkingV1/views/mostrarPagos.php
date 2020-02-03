<?php 

class pagos{
	public function formularioPagos(){ 
		$mesCurso = date('n');
		$añoActual = date('Y');
		switch ($mesCurso) {
			case 1: $mesCursoAnt = 'Diciembre'; $mesCurso = 'Enero'; $mesCursoDes = 'Febrero'; break;
			case 2: $mesCursoAnt = 'Enero'; $mesCurso = 'Febrero'; $mesCursoDes = 'Marzo'; break;
			case 3: $mesCursoAnt = 'Febrero'; $mesCurso = 'Marzo'; $mesCursoDes = 'Abril'; break;
			case 4: $mesCursoAnt = 'Marzo'; $mesCurso = 'Abril'; $mesCursoDes = 'Mayo'; break;
			case 5: $mesCursoAnt = 'Abril'; $mesCurso = 'Mayo'; $mesCursoDes = 'Junio'; break;
			case 6: $mesCursoAnt = 'Mayo'; $mesCurso = 'Junio'; $mesCursoDes = 'Julio'; break;
			case 7: $mesCursoAnt = 'Junio'; $mesCurso = 'Julio'; $mesCursoDes = 'Agosto'; break;
			case 8: $mesCursoAnt = 'Julio'; $mesCurso = 'Agosto'; $mesCursoDes = 'Septiembre'; break;
			case 9: $mesCursoAnt = 'Agosto'; $mesCurso = 'Septiembre'; $mesCursoDes = 'Octubre'; break;
			case 10: $mesCursoAnt = 'Septiembre'; $mesCurso = 'Octubre'; $mesCursoDes = 'Noviembre'; break;
			case 11: $mesCursoAnt = 'Octubre'; $mesCurso = 'Noviembre'; $mesCursoDes = 'Diciembre'; break;
			case 12: $mesCursoAnt = 'Noviembre'; $mesCurso = 'Diciembre'; $mesCursoDes = 'Enero'; break;
		}
?>
		<section class="container mt-2 pt-2">
			<h3 class="text-uppercase text-center">Mensualidades</h3>
			<div class="container" id='tableMostrar'>
			 	<table class="table table-hover" id='tablePagos'>
				    <thead>
				      <tr>
				        <th>Placa</th>
				        <th class='text-center'><?php echo $mesCursoAnt.' '; if($mesCurso == 'Enero'){ echo $añoActual-1; }else{ echo $añoActual; } ?></th>
				        <th class='text-center'><?php echo $mesCurso.' '.$añoActual; ?></th>
				        <th class='text-center'><?php echo $mesCursoDes.' '; if($mesCurso == 'Diciembre'){ echo $añoActual+1; }else{ echo $añoActual; } ?></th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php 
				    		//require_once 'db/conexion.php';
				    		$obj = new pagoVehiculo();
				    		$consult = $obj->consultarVehivulo();

				    		foreach($consult as $key){
				    	?>
				    	<tr>
				    		<td class='text-uppercase'><?php echo $key[1]; ?></td>
				    		<td class="text-center">
				    			<?php 
				    				if($mesCurso == 'Enero'){$añoActual = $añoActual-1;}else{$añoActual;}

				    				$dato = array($key[0],$mesCursoAnt.'-'.$añoActual);
				    				if($obj->consultarVeh($dato)[0] == ''){ ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MA" onchange="pagosIngresar(this);">
				    			<?php }else{ ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MA" onchange="pagosIngresar(this);" checked>
				    			<?php } ?>

				    			<input type="hidden" name="mesPago" value="<?php echo $mesCursoAnt.'-'; if($mesCurso == 'Enero'){ echo $añoActual-1 .'|'.$key[1]; }else{ echo $añoActual.'|'.$key[1]; } ?>" id="<?php echo 'MA'.$key[0]; ?>">
				    		</td>

				    		<td class="text-center">
				    			<?php 
				    				$dato = array($key[0],$mesCurso.'-'.$añoActual);
				    				if($obj->consultarVeh($dato)[0] == ''){ 
				    			 ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MC" onchange="pagosIngresar(this);">
				    			<?php }else{ ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MC" onchange="pagosIngresar(this);" checked>
				    			<?php } ?>

				    			<input type="hidden" name="mesPago" value="<?php echo $mesCurso.'-'.$añoActual.'|'.$key[1]; ?>" id="<?php echo 'MC'.$key[0]; ?>">
				    		</td>

				    		<td class="text-center">
				    			<?php 
				    				if($mesCurso == 'Diciembre'){$añoActual = $añoActual-1;}else{$añoActual;}

				    				$dato = array($key[0],$mesCursoDes.'-'.$añoActual);
				    				if($obj->consultarVeh($dato)[0] == ''){
				    			 ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MD" onchange="pagosIngresar(this);">
				    			<?php }else{ ?>
				    				<input type="checkbox" id="<?php echo $key[0]; ?>" value="MD" onchange="pagosIngresar(this);" checked>
				    			<?php } ?>
				    			<input type="hidden" name="mesPago" value="<?php echo $mesCursoDes.'-'; if($mesCurso == 'Diciembre'){ echo $añoActual+1 .'|'.$key[1]; }else{ echo $añoActual.'|'.$key[1]; } ?>" id="<?php echo 'MD'.$key[0]; ?>">
				    		</td>

				    	<?php
				    		}

				    	 ?>
				  	 	</tr>
				    </tbody>
				  </table>
			</div>
		</section>
<?php
	}
}

 ?>

