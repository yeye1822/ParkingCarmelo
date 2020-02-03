<div class="content-7" id= 'tarifaF'>
   <h2>Ingresar Tarifa</h2>
   <form action="controllers/t_tarifa.php" method="post"> 
	   <input required class="form-control mt-2" name='tarifa' id='tarifa' placeholder="Ingrese el valor tarifa" maxlength="8" onkeypress="return valida(event)" tabindex="1">
	   <select required class="form-control mt-2 text-capitalize" name='estado' id='estado' tabindex="2">
			<option value=''>Escoge el Estado</option>
	   		<?php 
	   			foreach ($consultStatus as $key) {
	   				echo "<option value=".$key[0].">".$key[1]."</option>";
	   			}
	   		?>	
		</select>	
		<div class='boton mt-2 '>
			<button type="reset" class="btn btn-link ml-2 float-right" tabindex="6">
				   <img src="libraries/image/agregar.png" width="23" height="23">
			</button>
			<button type="submit" class="btn btn-link ml-2 float-right" tabindex="5">
			      <img src="libraries/image/Guardar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="3" onclick="buscaTarifa()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>