 <?php

 class Informes{

  public function informesCar(){
?>
 
    <div class="jumbotron text-center">
        <h1>Informes de Vehiculos</h1>
    </div>
    <div class="container">
      <form method="post" action='Informes' >
        <div class="row">
          
             <div class="col-sm-10">
                <div class="form-group">
                  <input type="date" class="form-control" name="dateTxt">
                </div>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success form-control">Consultar</button>
              </div>
        </div>
       </form>     
      <div class="row">   
          <div class="col-md-7">
            <h2>Inusuales</h2>
             <div class="table-responsive">          
                <table id="example" class="display" style="width:100%">
                    <thead>
                      <tr> 
                        <th>Placa</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Concepto</th>
                        <th>Valor</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                       date_default_timezone_set('America/Bogota');

                       $fecha = isset($_POST['dateTxt']) ? $_POST['dateTxt'] : date('Y-m-d');
          
                      $obj = new InformesControllers();
                      $data = $obj->carInusualInfo($fecha);

                      foreach($data as $key){

                        if($key[7] == 1){
                          $color = "green";
                        }else{
                          $color = "orange";
                        }

                        echo "<tr style='background-color:".$color.";'>";
                        echo "<td>".$key[0]."</td>";
                        echo "<td>".date_format(date_create($key[1]), 'd/m/Y g:i A')."</td>";

                        if($key[2] == "0000-00-00 00:00:00"){
                           echo "<td style='color:red;'>".date_format(date_create($key[2]), 'd/m/Y g:i A')."</td>";
                        }else{
                           echo "<td>".date_format(date_create($key[2]), 'd/m/Y g:i A')."</td>";
                        }
                        echo "<td>".$key[8]."</td>";
                        echo "<td>".$key[9]."</td>";
                     
                        
                        echo "</tr>";
                      }

                         ?>
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Placa</th>
                          <th>Entrada</th>
                          <th>Salida</th>
                          <th>Concepto</th>
                          <th>Valor</th>
                        </tr>
                    </tfoot>
                  </table>
             </div>
          </div>

          <div class="col-md-5">
            <h2>Mensualidad</h2>
            <div class="table-responsive">          
                <table id="example1" class="display" style="width:100%">
                  <thead>
                    <tr> 
                      <th>Placa</th>
                      <th>Entrada</th>
                      <th>Salida</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $obj = new InformesControllers();
                      $data = $obj->seeReportMonthly($fecha);

                          foreach($data as $key){
                            echo "<tr>";
                            echo "<td>".$key[0]."</td>";
                            echo "<td>".date_format(date_create($key[1]), 'd/m/Y g:i A')."</td>";
                            if($key[2] == "0000-00-00 00:00:00"){
                               echo "<td style='color:red;'>".date_format(date_create($key[2]), 'd/m/Y g:i A')."</td>";
                            }else{
                               echo "<td>".date_format(date_create($key[2]), 'd/m/Y g:i A')."</td>";
                            }
                            echo "</tr>";
                          }
                      ?>
                  </tbody>
                   <tfoot>
                      <tr>
                       <th>Placa</th>
                        <th>Entrada</th>
                        <th>Salida</th>
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

 