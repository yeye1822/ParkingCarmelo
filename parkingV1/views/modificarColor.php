<div class="content-5" id="colorF">
	<h2>Modificar el Color</h2>
	<form method="post" action='controllers/registroColor.php'>	 
	   <input required class="form-control mt-2 text-capitalize" name='colorP'  placeholder value="<?php echo $color; ?>">
	   <input required class="form-control mt-2 text-capitalize" name='color'  placeholder="Ingresa la descripción del color a Modificar">
	   <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
	   <input type="hidden" name="op" value="1">


		<div class='boton mt-2 '>
			<button type="submit" class="btn btn-link ml-2 float-right">
			      <img src="libraries/image/Editar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarColor()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>