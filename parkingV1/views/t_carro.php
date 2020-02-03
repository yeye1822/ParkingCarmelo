<div class="content-6" id='t_carro'>
	<h2>Ingresar Carroceria</h2>
	<form method="post" action="controllers/carroceria.php"> 
	   <input required class="form-control mt-2 text-capitalize" name='carroceria' id='carroceriaP' placeholder="Ingrese el tipo de carroceria" maxlength="30" tabindex="1" required>
		<div class='boton mt-2 '>
			<button type="reset" class="btn btn-link ml-2 float-right" tabindex="5">
				      <img src="libraries/image/agregar.png" width="23" height="23">
				</button>
			<button type="submit" class="btn btn-link ml-2 float-right" tabindex="4">
			      <img src="libraries/image/Guardar.png" width="23" height="23">
			</button>
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="2" onclick="buscarCarroceria()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>