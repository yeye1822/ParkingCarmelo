<section class="container mt-2 pt-2">
	<h3 class="text-uppercase text-center">Vehiculos Inusuales</h3>
	<div class="container" id='tableMostrar'>
	 	<table class="table table-hover" >
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
				        	<td class='text-uppercase'>".$key[1]."</td>
				        <td>
							<div class='input-group'>  
							  <select class='form-control' name='comentario' id='".$key[2]."S' onchange='modificarConcepto(".$key[2].")'>
							  <option value=''>- Selecciona una opción -</option>";
							  foreach ($result as $Concepto) {
							  	echo "<option value=".$Concepto[0].">".$Concepto[1]."</option>";
							  }
					        		
					  echo "  </select>
							</div>
				        </td>
				      </tr>";		 
                  }
		     ?> 
		    </tbody>
		  </table>
	</div>
</section>