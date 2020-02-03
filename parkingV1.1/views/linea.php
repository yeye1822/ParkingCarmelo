<div class="content-4" id='lineaF'> 
	<h2>Ingresar Linea</h2>
	<form method="post" action="controllers/linea.php">
		<select required class="form-control mt-2" name='emblemas' id='emblemas' tabindex="1">
			<option value=''>Escoge el Emblema</option>
		   		<?php   
		   			foreach ($consult as $key) {
		   				echo "<option value=".$key[0].">".$key[1]."</option>";
		   			}
		   		?>	
		</select>	 
	   <input required class="form-control mt-2 text-capitalize" name='linea' id='lineaE' placeholder="Ingresa la Linea del vehiculo" tabindex="2" maxlength="20">
	   <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">


		<div class='boton mt-2 '>
			<button type="reset" class="btn btn-link ml-2 float-right" tabindex="5">
				      <img src="libraries/image/agregar.png" width="23" height="23">
				</button>
			<button type="submit" class="btn btn-link ml-2 float-right" tabindex="4">
			      <img src="libraries/image/Guardar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="3" onclick="buscarLinea()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>