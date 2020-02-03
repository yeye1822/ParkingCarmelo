<?php $obj = new conInusuales(); ?>
<div class="content-2" id='vehiculo'>
   <h2>Ingresar Vehiculo</h2>
   <form action="controllers/vehiculo.php" method="post">
      <select class="form-control mt-2 text-capitalize" name="usuario" id='usuario' required tabindex="1">
      		<option value=''>Escoge el Usuario</option>
               <?php 
               $usuario = $obj->consultarUsuario();  
                  foreach ($usuario as $key) {
                     echo "<option value=".$key[0].">".$key[2]." ".$key[3]." - ".$key[1]."</option>";
                  }
               ?> 
      </select>
      <input type="text" class="form-control mt-2  text-uppercase" name="placa" placeholder="Ingrese la Placa" id='placa' required maxlength="6" tabindex="2">
      <select required class="form-control mt-2" name='tpago' id='tpago' tabindex="3">
            <option value=''>Escoge el Tipo de Pago</option>
               <?php 
               $valor = $obj->consultarTPago();  
                  foreach ($valor as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  } 
               ?> 
      </select>
      <select required class="form-control mt-2" name='valor' id='valor' tabindex="4">
      		<option value=''>Escoge el Valor</option>
               <?php 
               $valor = $obj->consultarValor();  
                  foreach ($valor as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  } 
               ?> 
      </select>
      <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
      <input type="text" class="form-control mt-2" name="fechaP" placeholder="Ingrese el día de pago" id='fechaP' required tabindex="5" maxlength="2" onkeypress="return valida(event)" min='1' max='31'>
      <input type="hidden" value="50" name='marca'>
        <input type="hidden" value="1" name='color'>
        <input type="hidden" value="0" name='linea'>


<!--       <select required class="form-control mt-2" name='marca' id='marca' tabindex="6" onchange="cargarLinea(this);">
      		<option value=''>Escoge la Marca</option>
               <?php 
               $marca = $obj->consultarEmblema();  
                  foreach ($marca as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  }
               ?> 
      </select> -->
<!--       <select required class="form-control mt-2" name='linea' id='linea' tabindex="7">
         <option value="">Escoge la linea</option>
      </select> -->
<!--       <select required class="form-control mt-2" name='color' id='color' tabindex="8">
      		<option value=''>Escoge el Color</option>
               <?php 
               $color = $obj->consultarColor();  
                  foreach ($color as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  }
               ?> 
      </select> -->



      <select required class="form-control mt-2" name='carroceria' id='carroceria' tabindex="9">
      		<option value=''>Escoge el tipo carroceria</option>
               <?php 
               $carroceria = $obj->consultarCarroceria();  
                  foreach ($carroceria as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  }
               ?> 
      </select>
      <select required class="form-control mt-2" name='estado' id='estado' tabindex="10">
      		<option value=''>Escoge el Estado</option>
               <?php 
               $estado = $obj->consultarEst();  
                  foreach ($estado as $key) {
                     echo "<option value=".$key[0].">".$key[1]."</option>";
                  }
               ?> 
      </select>

   	<div class='boton mt-2'>
         <button type="reset" class="btn btn-link ml-2 float-right">
               <img src="libraries/image/agregar.png" width="23" height="23" tabindex="11">
         </button>
   		<button type="submit" class="btn btn-link ml-2 float-right">
   		      <img src="libraries/image/Guardar.png" width="23" height="23">
   		</button>	
   		<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarVehiculo()">
   		      <img src="libraries/image/Buscar1.png" width="23" height="23" tabindex="12" >
   		</button>	
   	</div>
   </form>
</div>