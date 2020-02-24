<?php 

	class formInicio{ 
		public function inicioForm(){
			?>
				<section class="container mt-5 pt-5">
				    <h3 class="text-uppercase text-center">Ingrese Los Datos</h3>
				    <p class="lead text-center">Bienvenido al Parking Carmelo</p>
				    <div class="container">
				    	<div class="row">
				    		<div id="mensaje" class="col-sm-12">
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
				    	</div>
				    	<div class="row">
				    		<div class="col-sm-6 mt-3 pt-3">
				    			
						      <form method="post" action='controllers/registroDatos.php'>
						          <div class="input-group">
						              <span class="input-group-addon"><i class="fa fa-car"></i></span>
						              <input type="text" class="form-control text-uppercase" name="placa" placeholder="Escribe tu placa" id='placa' maxlength="6" required autocomplete="off" onkeyup="writeTimeReal(this)">
						          </div> 

								<div class="row mt-3"> 
									<div class="col-sm-12 text-center">
										<div class="row">
											<div class="radio col-sm-6 typeIn">
										      <label><input type="radio" name="tipoEntrada" value="2" required> Entrada</label>
										    </div>
										    <div class="radio col-sm-6 typeOut">
										      <label><input type="radio" name="tipoEntrada" value="1" required > Salida</label>
										    </div>
										</div>
									</div>
								</div>

						          <div class="input-group col-sm-12 mt-2 pt-3 pb-2">
						            <button type="submit" class="btn btn-success  btn-block ">INGRESAR</button>
						          </div>
						      </form>
				    		</div>

				    		<div class="col-sm-6 mt-1 pt-3 mb-3">
				    			<div class="col-sm-1"></div>
				    			<div class="col-sm-10 licensePlate">
				    				<div class="licensePlateIn">
				    					<h1 id="writeTime">******</h1>
				    				</div>
				    			</div>
				    			<div class="col-sm-1"></div>
				    		</div>
				    	</div>
				    </div>
				  </section>
			<?php
		}
	}


 ?>