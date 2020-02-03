<div class="container mt-5 pt-5 topMovil">
	<div class="text-center">
		<h1>Bienvenido al Parking Carmelo</h1>
		<h6>Ingresé la Placa del Vehículo</h6>
	</div>
	<div class="row containerMain">
		<div class="col-12 col-md-6 text-center txtInput" >
			<div class="input-group input-group-lg">
				<div class="input-group mb-3 inputPlace">
				  <input type="text" class="form-control text-uppercase" placeholder="Ingresé la placa" aria-label="Ingresé la placa" aria-describedby="button-addon2" maxlength="6" onkeyup="showPlate(this.value)">
				  <div class="input-group-append">
				    <button class="btn btn-outline-secondary  bg-primary text-light" type="button">Entrada</button>
    				<button class="btn btn-outline-secondary  bg-warning text-light" type="button">Salida</button>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="plataForm" id="plataForm">
				<h1 class="placeText">XXX XXX</h1>
			</div>
		</div>
	</div>
</div>