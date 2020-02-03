<div class="content-6" id='t_carro'>
	<h2>Modificar Carroceria</h2>
	<form method="post" action="controllers/carroceria.php"> 
	   <input required class="form-control mt-2 text-capitalize" name='carroceriaP' id='carroceriaP'  maxlength="30" tabindex="1" required readonly value="<?php echo $t_carro; ?>" >
	   <input required class="form-control mt-2 text-capitalize" name='carroceria' maxlength="30" tabindex="2" required placeholder="Ingresa el dato por el que deseas Modificar">
	   <input type="hidden" name="op" value="1">		

		<div class='boton mt-2 '>
			<button type="submit" class="btn btn-link ml-2 float-right" tabindex="4">
			     <img src="libraries/image/Editar.png" width="23" height="23">
			</button>
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="3" onclick="buscarCarroceria()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>