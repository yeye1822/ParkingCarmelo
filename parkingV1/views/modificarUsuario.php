<?php 
require_once '../models/usuarios.php';
require_once '../models/MconsInusuales.php';

$db = new usuariosForm();
$consulta = $db->consultarUsu($_POST['id']);

if($consulta[0] != ''){

 ?>

 <div class="content-1" id='usuario'>
   <h2>Modificar Usuario</h2> 
   <form method="post" action="controllers/usuarios.php?op=1"> 
	   <input type="text" class="form-control mt-2 text-capitalize" name="cedula" placeholder="Ingrese la Cedula" id='cedula' required   onkeypress="return valida(event)" tabindex="1" value="<?php echo $consulta[1]; ?>">
	   <input type="text" class="form-control mt-2 text-capitalize" name="nombre" placeholder="Ingrese los Nombre" id='nombre' required maxlength="70" tabindex="2" value="<?php echo $consulta[2]; ?>">
	   <input type="text" class="form-control mt-2 text-capitalize" name="apellidos" placeholder="Ingrese los Apellidos" id='apellidos' required maxlength="70" tabindex="3" value="<?php echo $consulta[3]; ?>">
	   <input type="email" class="form-control mt-2" name="correo" placeholder="Ingrese el Correo" id='correo' required maxlength="70" tabindex="4" value="<?php echo $consulta[4]; ?>">
	    <input type="text" class="form-control mt-2" name="telefono" placeholder="Ingrese un numero de contacto" id='telefono' maxlength="10" onkeypress="return valida(event)" required tabindex="5" value="<?php echo $consulta[7]; ?>">
	  <select class="form-control mt-2" name="estado" id ='estado' required tabindex="6">
	   		<option value=''>Escoge el Estado</option>
	   		<?php 
	   			require_once '../db/conexion.php';
	   			$obj = new conInusuales();
		    	$estado = $obj->consultarEst();  
	   			foreach ($estado as $key) {
	   				if($consulta[6] == $key[0]){
	   					echo "<option value=".$key[0]."  selected>".$key[1]."</option>";
	   				}else{
	   					echo "<option value=".$key[0].">".$key[1]."</option>";
	   				}
	   			}
	   		?>	
	   </select>
		<div class='boton mt-2 '>
			<button type="sumit" class="btn btn-link ml-2 float-right" tabindex="8">
			      <img src="libraries/image/Editar.png" width="23" height="23">
			</button>	
			<button type="button" class="btn btn-link ml-2 float-right" onclick="buscarUsuario()" tabindex="7" >
			      <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>

<?php 
}else{

  echo "<script>alert('El Usuario no existe o el parametro de busqueda esta vacío')</script>";
  require_once 'usuarios.php';
}
 ?>
