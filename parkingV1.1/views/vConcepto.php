<div class="container mt-5">
   <div class="row">   
        <div class="col-md-12">
           <div class="table-responsive">          
              <table id="example" class="display" style="width:100%">
                  <thead>
                    <tr> 
                      <th>Descripción</th>
                      <th>Valor</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                      $conceptos = new ControllersConcepto();
                      echo $conceptos->mostrarConceptos();

                    ?>
          
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                      </tr>
                  </tfoot>
              </table>
           </div>
        </div>
    </div>
</div>