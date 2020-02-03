<?php require_once '../models/MconsInusuales.php'; 
$obj = new conInusuales();
$consult = $obj->mostrarDatosInusuales();
$result = $obj->mostrarConcepto();

?>
<table class="table table-hover" id='tableMostrar'>
		    <thead>
		      <tr>
		        <th>Fecha</th>
		        <th>Placa</th>
		        <th>Concepto</th>
		      </tr>
		    </thead>
		    <tbody>

		    <?php 
		    	foreach ($consult as $key) {
                     echo "
                     	<tr>
				        	<td>".$key[0]."<input type='hidden' value=".$key[2]." name = 'idConcepto' id=".$key[2]."></td>
				        	<td>".$key[1]."</td>
				        <td>
							<div class='input-group'>  
							  <select class='form-control' name='comentario' id='".$key[2]."S'>
							  <option value=''>- Selecciona una opción -</option>";
							  foreach ($result as $Concepto) {
							  	echo "<option value=".$Concepto[0].">".$Concepto[1]."</option>";
							  }
					        		
					  echo "  </select>
							  <div class='input-group-append ml-2 mt-1'>
							    <span class='input-group-text' onclick='modificarConcepto(".$key[2].")'><img src='libraries/image/Guardar.png' width='25' height='25'></span>
							  </div>
							</div>
				        </td>
				      </tr>


				      ";
							 
                  }

		     ?>

		     
		    </tbody>
		  </table>