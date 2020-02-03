<?php 
require_once '../models/emblema.php';
require_once '../models/MconsInusuales.php';

$obj = new conInusuales();
$consulta = $obj->consultarEmblema($_POST['marca']);

if($consulta[0] != ''){
?>
	<div class="content-3" id='emblemas'>
	   <h2>Modificar Emblema</h2>
	   <form method="post" action='controllers/emblema.php?op=1'>	 
		   <input required class="form-control mt-2 text-capitalize" name='emblemas' id='emblema' placeholder="Ingresa el Emblema" value="<?php echo $consulta[1]; ?>">
		    <input type ='hidden' required class="form-control mt-2 text-capitalize" name='emblemas1' id='emblema' placeholder="Ingresa el Emblema" value="<?php echo $consulta[1]; ?>">
		  <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
			<div class='boton mt-2 '>
				<button type="sumit" class="btn btn-link ml-2 float-right">
				      <img src="libraries/image/Editar.png" width="25" height="25">
				</button>	
				<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarEmblema()">
				      <img src="libraries/image/Buscar1.png" width="25" height="25">
				</button>	
			</div>
		</form>
	</div>
<?php
}else{
	echo "<script>alert('El Emblema no existe o el parametro de busqueda esta vacío')</script>";
  	require_once 'emblemas.php';
}



 ?>