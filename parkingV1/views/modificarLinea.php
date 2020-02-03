<div class="content-4" id='lineaF'>
	<h2>Modificar Linea</h2> 
	<form method="post" action="controllers/linea.php">
		<input required class="form-control mt-2 text-capitalize" name='linea1' id='linea1'  maxlength="20"  value="<?php echo $linea; ?>" readonly>
		<input required class="form-control mt-2 text-capitalize" name='linea' id='linea' placeholder="Ingresa la Linea del vehiculo a Modificar" tabindex="2" maxlength="20">

		<select required class="form-control mt-2" name='emblemas' id='emblemas' tabindex="3">
			<option value=''>Escoge el Emblema</option>
		   		<?php 
		   			foreach ($consult as $key) {
		   				if($cons[2] == $key[0]){
		   					echo "<option value=".$key[0]." selected>".$key[1]."</option>";
		   				}else{
		   					echo "<option value=".$key[0].">".$key[1]."</option>";
		   				}
		   			}
		   		?>	
		</select>	 
	   
	   <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
	   <input type="hidden" name="op" value="1" class="form-control" >


		<div class='boton mt-2 '>
			<button type="sumit" class="btn btn-link ml-2 float-right" >
				      <img src="libraries/image/Editar.png" width="23" height="23">
				</button>
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="4" onclick="buscarLinea()">
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>
