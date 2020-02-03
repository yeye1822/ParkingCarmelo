<?php 

	class formInicio{ 
		public function inicioForm(){
			?>
				<section class="container mt-5 pt-5">
				    <h3 class="text-uppercase text-center">Ingrese Los Datos</h3>
				    <p class="lead text-center">Bienvenido al Parking Carmelo</p>
				    <div class="container">

				     <div id="mensaje">
				      	<?php 
				      		@$mensaje = $_GET['mensaje'];
				      		if(@$mensaje != ''){
				      			echo "<script>
				      					mensaje('$mensaje');
				      					setTimeout(function(){ 
											window.location.href = 'index.php';
				      					 }, 3000);
				      				</script>"; 
				      		} 
				      	?>	
				     </div>

				      <form method="post" action='controllers/registroDatos.php'>
					          <div class="input-group col-sm-12 mt-3 pt-3">
					              <span class="input-group-addon"><i class="fa fa-car"></i></span>
					              <input type="text" class="form-control text-uppercase" name="placa" placeholder="Escribe tu placa" id='placa' required>
					              
					          </div> 

							<!--radio buttom opciones de visita-->
							<div style="padding-left: 25px;" class="mt-3 pt-3">
								<div class="radio">
							      <label><input type="radio" name="tipoEntrada" value="2" required> Entrada</label>
							    </div>
							    <div class="radio">
							      <label><input type="radio" name="tipoEntrada" value="1" required> Salida</label>
							    </div>
							</div>
							<!--termina formulario de opciones de entrada-->

					          <div class="input-group col-sm-12 mt-5 pt-3 mb-5 pb-5">
					            <button type="submit" class="btn btn-success  btn-block ">INGRESAR</button>
					          </div>
				      </form>
				    </div>
				  </section>
			<?php
		}
	}


 ?>