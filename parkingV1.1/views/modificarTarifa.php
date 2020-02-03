<div class="content-7" id= 'tarifaF'>
   <h2>Modificar Tarifa</h2>
   <form action="controllers/T_tarifa.php" method="post"> 
   		<input required class="form-control mt-2" name='tarifaD' value = "<?php echo $tarifa; ?>"  readonly tabindex="1">
	   <input required class="form-control mt-2" name='tarifa' id='tarifa' placeholder="Ingrese el valor tarifa a Modificar" maxlength="8" onkeypress="return valida(event)" tabindex="2">
	   <select required class="form-control mt-2 text-capitalize" name='estado' id='estado' tabindex="3">
			<option value=''>Escoge el Estado</option>
	   		<?php  
	   			foreach ($consultStatus as $key) {
	   				if($consult[2] == $key[0]){
	   					echo "<option value=".$key[0]." selected >".$key[1]."</option>";
	   				}else{
	   					echo "<option value=".$key[0].">".$key[1]."</option>";
	   				}	
	   			}
	   		?>	
		</select>
		<input type="hidden" name="op" value="1">	
		<div class='boton mt-2 '>
			<button type="submit" class="btn btn-link ml-2 float-right">
			      <img src="libraries/image/Editar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="4" onclick="buscaTarifa()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>