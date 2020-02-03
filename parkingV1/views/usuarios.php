<div class="content-1" id='usuario'>
   <h2>Usuarios del Sistema</h2> 
   <form method="post" action="controllers/usuarios.php"> 
	   <input type="text" class="form-control mt-2 text-capitalize" name="cedula" placeholder="Ingrese la Cedula" id='cedula'  onkeypress="return valida(event)" tabindex="1">
	   <input type="text" class="form-control mt-2 text-capitalize" name="nombre" placeholder="Ingrese los Nombre" id='nombre' required maxlength="70" tabindex="2">
	   <input type="text" class="form-control mt-2 text-capitalize" name="apellidos" placeholder="Ingrese los Apellidos" id='apellidos' required maxlength="70" tabindex="3">
	   <input type="email" class="form-control mt-2" name="correo" placeholder="Ingrese el Correo" id='correo' required maxlength="70" tabindex="4">
	   <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
	    <input type="text" class="form-control mt-2" name="telefono" placeholder="Ingrese un numero de contacto" id='telefono' maxlength="10" onkeypress="return valida(event)" required tabindex="5">
	  <select class="form-control mt-2" name="estado" id ='estado' required tabindex="6">
	   		<option value=''>Escoge el Estado</option>
	   		<?php 
	   			$obj = new conInusuales();
		    	$estado = $obj->consultarEst();  
	   			foreach ($estado as $key) {
	   				echo "<option value=".$key[0].">".$key[1]."</option>";
	   			}
	   		?>	
	   </select>
		<div class='boton mt-2 '>
			<button type="reset" class="btn btn-link ml-2 float-right" >
				      <img src="libraries/image/agregar.png" width="23" height="23" tabindex="10">
			</button>
			<button type="submit" class="btn btn-link ml-2 float-right" tabindex="9">
			      <img src="libraries/image/Guardar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarUsuario()" tabindex="7" >
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>