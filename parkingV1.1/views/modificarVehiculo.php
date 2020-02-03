<?php 

require_once '../models/vehiculo.php';
require_once '../models/MconsInusuales.php';

$db = new Vehiculo();
$obj = new conInusuales();
$consulta = $db->consultarVehiculo($_POST['placa']);

if($consulta[2] != ''){
 ?>

<div class="content-2" id='vehiculo'>
   <h2>Modificar Vehiculo</h2>
   <form action="controllers/vehiculo.php?op=1" method="post">
      <select class="form-control mt-2 text-capitalize" name="usuario" id='usuario' required tabindex="1">
      		<option value=''>Escoge el Usuario</option>
               <?php 
               $usu1 = $obj->consultarUsuario();
                  foreach ($usu1 as $key) {
                  	if($consulta[1] == $key[0]){
                        echo "<option value=".$key[0]." selected>".$key[2]." ".$key[3]." - ".$key[1]."</option>";
                  	}else{
                  		echo "<option value=".$key[0].">".$key[2]." ".$key[3]." - ".$key[1]."</option>";
                  	}
                  }
               ?> 
      </select>
      <input type="text" class="form-control mt-2  text-uppercase" name="placa" placeholder="Ingrese la Placa" id='placa' required maxlength="6" tabindex="2" value="<?php echo $consulta[2]; ?>">
      <select required class="form-control mt-2" name='tpago' id='tpago' tabindex="3">
            <option value=''>Escoge el Tipo de Pago</option>
               <?php 
               $valor = $obj->consultarTPago();  
                  foreach ($valor as $key) {
                  	if($consulta[6] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                  	}else{
                  		echo "<option value=".$key[0].">".$key[1]."</option>";
                  	}
                  } 
               ?> 
      </select>
      <select required class="form-control mt-2" name='valor' id='valor' tabindex="4">
      		<option value=''>Escoge el Valor</option>
               <?php 
               $valor = $obj->consultarValor();  
                  foreach ($valor as $key) {
                  	if($consulta[4] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                  	}else{
                  		echo "<option value=".$key[0].">".$key[1]."</option>";
                  	}
                  } 
               ?> 
      </select>
      <input type="hidden" class="form-control" name="fechaIngreso" id='fechaIngreso' value="<?php echo date('Y-m-d H:i:s'); ?>">
      <input type="text" class="form-control mt-2" name="fechaP" placeholder="Ingrese el día de pago" id='fechaP' required tabindex="5" maxlength="2" onkeypress="return valida(event)" min='1' max='31' value="<?php echo $consulta[5]; ?>">
      <select required class="form-control mt-2" name='marca' id='marca' tabindex="6" onchange="cargarLinea(this);">
      		<option value=''>Escoge la Marca</option>
               <?php 
               $marca = $obj->consultarEmblema();  
                  foreach ($marca as $key) {
                  	if($consulta[7] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                     }else{
                     	echo "<option value=".$key[0].">".$key[1]."</option>";
                     }
                  }
               ?> 
      </select>
      <select required class="form-control mt-2" name='linea' id='linea' tabindex="7">
         <option value="">Escoge la linea</option>
          <?php 
               $color = $obj->consultarLinea($consulta[7]);  
                  foreach ($color as $key) {
                  	if($consulta[11] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                  	}else{
                  		echo "<option value=".$key[0].">".$key[1]."</option>";
                  	}
                  }
               ?> 
      </select>
      <select required class="form-control mt-2" name='color' id='color' tabindex="8">
      		<option value=''>Escoge el Color</option>
               <?php 
               $color = $obj->consultarColor();  
                  foreach ($color as $key) {
                  	if($consulta[8] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                  	}else{
                  		echo "<option value=".$key[0].">".$key[1]."</option>";
                  	}
                  }
               ?> 
      </select>
      <select required class="form-control mt-2" name='carroceria' id='carroceria' tabindex="9">
      		<option value=''>Escoge el tipo carroceria</option>
               <?php 
               $carroceria = $obj->consultarCarroceria();  
                  foreach ($carroceria as $key) {
                  	if($consulta[9] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                    }else{
                    	echo "<option value=".$key[0].">".$key[1]."</option>";
                    }
                  }
               ?> 
      </select>
      <select required class="form-control mt-2" name='estado' id='estado' tabindex="10">
      		<option value=''>Escoge el Estado</option>
               <?php 
               $estado = $obj->consultarEst();  
                  foreach ($estado as $key) {
                  	if($consulta[10] == $key[0]){
                     	echo "<option value=".$key[0]." selected>".$key[1]."</option>";
                     }else{
                     	echo "<option value=".$key[0].">".$key[1]."</option>";
                     }
                  }
               ?> 
      </select>

   	<div class='boton mt-2'>
   		<button type="submit" class="btn btn-link ml-2 float-right">
   		      <img src="libraries/image/Editar.png" width="23" height="23">
   		</button>	
   		<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarVehiculo()">
   		      <img src="libraries/image/Buscar1.png" width="23" height="23" tabindex="12" >
   		</button>	
   	</div>
   </form>
</div>

 <?php 
}else{

  echo "<script>alert('El Vehiculo no existe o el parametro de busqueda esta vacío')</script>";
  require_once 'vehiculos.php';
}

  ?>
