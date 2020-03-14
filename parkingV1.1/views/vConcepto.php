<div class="container mt-5">
  <div class="row">
    <div class="col-md-12 text-right">
      <button type="button" class="btn btn-success mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">Nuevo</button>
    </div>
  </div>
   <div class="row">   
        <div class="col-md-12">
           <div class="table-responsive">          
              <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr> 
                      <th>Descripción</th>
                      <th>Valor</th>
                      <th>Estado</th>
                      <th style='text-align:center;'>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                      $conceptos = new ControllersConcepto();
                      $concept =  $conceptos->mostrarConceptos();
                      $i = 0;

                      foreach ($concept as $key) {
                        echo "<tr>";
                        echo "<td>".$key[1]."</td>";
                        echo "<td>".$key[2]."</td>";
                        echo "<td id='id".$i."'>".$key[3]."</td>";
                        echo "<td style='text-align:center;'>
                                <i class='fa fa-edit' style='cursor:pointer; font-size:25px;' title='Modificar Concepto' data-target='#exampleModalUpdate' data-toggle='modal' onclick='selectConceptData(".$key[0].")'></i>   
                                <i class='fa fa-exchange' style='cursor:pointer;margin-left:20px; font-size:25px;' title='Cambiar Estado' onclick='updateConcept(".$i.",".$key[0].")'></i>
                              </td>";
                        
                        echo "</tr>";
                        $i++;
                      }

                    ?>
          
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Estado</th>
                        <th style='text-align:center;'>Acciones</th>
                      </tr>
                  </tfoot>
              </table>
           </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">INGRESAR NUEVO CONCEPTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="input-group">
              <span class="input-group-addon">T</span>
              <input type="text" class="form-control" placeholder="Digite La descripción del concepto" name="txtDescripcion" required>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">$</span>
              <input type="text" class="form-control" placeholder="Digite el valor del concepto" name="txtValor" required  onkeypress="return valida(event)">
            </div>
             <br>
             <input type="hidden" name="txtId" value="">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">↔</span>
              <select required name="txtStatus" style="width:100%">
                <option value="">- Seleccione el estado -</option>
                <?php 
                  $getConcept = new ControllersConcepto();
                  $statusConcept = $getConcept->getStatus();

                  foreach ($statusConcept as $status) {
                    echo "<option value='".$status[0]."'>".$status[1]."</option>";
                  }

                 ?>
              </select>
            </div>  

        </div>
        <div class="modal-footer">
          <?php 
              if($getConcept->getConcept() == 1){
                echo "<script>message('Operación Exitosa','El Registro se guardo con exito','success')</script>";
              }
           ?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
     </form>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR CONCEPTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="input-group">
              <span class="input-group-addon">T</span>
              <input type="text" class="form-control" placeholder="Digite La descripción del concepto" name="txtDescripcion" id="txtDescripcion" required>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">$</span>
              <input type="text" class="form-control" placeholder="Digite el valor del concepto" name="txtValor"  id="txtValor" required  onkeypress="return valida(event)">
            </div>
             <br>
              <input type="hidden" name="txtId" id="txtId">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">↔</span>
              <select required name="txtStatus" id="txtStatus" style="width:100%">
                <option value="">- Seleccione el estado -</option>
                <?php 
                  $getConcept = new ControllersConcepto();
                  $statusConcept = $getConcept->getStatus();

                  foreach ($statusConcept as $status) {
                    echo "<option value='".$status[0]."'>".$status[1]."</option>";
                  }

                 ?>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <?php
              if($getConcept->updateConceptData() == 1){
                echo "<script>message('Operación Exitosa','El registro se actualizó correctamente','success')</script>";
              }
           ?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
     </form>
  </div>
</div>