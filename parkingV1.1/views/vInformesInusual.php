<?php
class InformeInusual{
	public function seeReport(){
		date_default_timezone_set('America/Bogota');
		$fecha = date('Y-m-d');
?>

	<div class="jumbotron text-center">
        <h1>Informes de Vehiculos Inusuales</h1>
    </div>
    <div class="container">
    	<div class="row">   
          <div class="col-md-12">
            <h2>Inusuales</h2>
             <div class="table-responsive">          
                <table id="example" class="display" style="width:100%">
                    <thead>
                      <tr> 
                        <th>Placa</th>
                        <th>Tipo Pago</th>
                        <th>Operación</th>
                        <th style="text-align: center;">Entrada<br>Salida<br>[#D]-HH:MM:SS</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
           
                      $obj = new InformesControllers();
                      $data = $obj->seeInformesInusual($fecha);

                      $concept = new ConsultConcept();
                      $consult = $concept->seeConcept();
                      $i = 0;

                      foreach($data as $key){
                        echo "<tr>";
                        echo "<td>".$key[0]."</td>";

                        $bandera = $key[4] == "0" ? "" : "disabled";

                       	echo "<td>
	                       	<div class='input-group'>  
								  <select ".$bandera." class='form-control' name='comentario' id='valor".$i."'>
								  <option value=''>- Selecciona una opción -</option>";
	                        foreach ($consult as $Concept) {
	                        	if($Concept[0] == $key[3]){
	                        		echo "<option value='".$Concept[2]."-".$Concept[1]."-".$Concept[0]."' selected >".$Concept[1]."</option>";
	                        	}else{
	                        		echo "<option value='".$Concept[2]."-".$Concept[1]."-".$Concept[0]."'>".$Concept[1]."</option>";
	                        	}
							  	
							}
						echo "  </select>";

                        echo "<td><button type='button' class='btn btn-success' ".$bandera." onclick='payParking(".$i.")'>Pagar</button></td>";
                       
                        $fechaini = new DateTime($key[1]);
            						$fechafin = new DateTime(date("Y-m-d H:i:s"));
            						$interval = $fechaini->diff($fechafin);

                        if($key[2] == "0000-00-00 00:00:00"){
                           echo "<td style='text-align: center;'>".date_format(date_create($key[1]), 'd/m/Y g:i A')."<br><span style='color:red;'>".date_format(date_create($key[2]), 'd/m/Y g:i A')."<br>[".$interval->format('%a')."]-".$interval->format('%H').":".$interval->format('%I').":".$interval->format('%S')."</span></td>";
                        }else{
                           echo "<td style='text-align: center;'>".date_format(date_create($key[1]), 'd/m/Y g:i A')."<br>".date_format(date_create($key[2]), 'd/m/Y g:i A')."<br>[".$interval->format('%a')."]-".$interval->format('%H').":".$interval->format('%I').":".$interval->format('%S')."</td>";
                        }

                        echo "<input type='hidden' id='dia".$i."' value='".$interval->format('%a')."'>";
                        echo "<input type='hidden' id='hora".$i."' value='".$interval->format('%H')."'>";
                        echo "<input type='hidden' id='minutos".$i."' value='".$interval->format('%I')."'>";
                        echo "<input type='hidden' id='placa".$i."' value='".$key[0]."'>";
                        echo "<input type='hidden' id='idRegistro".$i."' value='".$key[6]."'>";
                        echo "<input type='hidden' id='fechafin".$i."' value='".$fechafin->format("Y-m-d H:i:s")."'>";
                       
              
                        echo "</tr>";
                        $i++;
                      }

                         ?>
                    </tbody>
                    <tfoot>

                       <tr> 
                        <th>Placa</th>
                        <th>Tipo Pago</th>
                        <th>Operación</th>
                        <th style="text-align: center;">Entrada<br>Salida<br>[#D]-HH:MM:SS</th>
                      </tr>
                    </tfoot>
                  </table>
             </div>
          </div>
       </div> 
    </div> 

<?php
	}
}