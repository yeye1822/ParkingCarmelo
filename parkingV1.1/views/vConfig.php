<div class="row">
	<div class="col-lg-1"></div>
	  <div class="col-lg-10">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#usuario" role="tab" aria-controls="home" aria-selected="true">Usuario</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#vehiculo" role="tab" aria-controls="profile" aria-selected="false">Vehiculo</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tCarro" role="tab" aria-controls="contact" aria-selected="false">Tipo Carro</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tarifa" role="tab" aria-controls="contact" aria-selected="false">Tarifa</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tPago" role="tab" aria-controls="contact" aria-selected="false">Tipo Pago</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#concepto" role="tab" aria-controls="contact" aria-selected="false">Concepto</a>
		  </li>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="usuario" role="tabpanel" aria-labelledby="home-tab">
		  	usuario
		  </div>
		  <div class="tab-pane fade" id="vehiculo" role="tabpanel" aria-labelledby="profile-tab">
		  	vehiculo
		  </div>
		  <div class="tab-pane fade" id="tCarro" role="tabpanel" aria-labelledby="contact-tab">
		  	Tipo Vehiculo
		  </div>
		  <div class="tab-pane fade" id="tarifa" role="tabpanel" aria-labelledby="contact-tab">
		  	Tarifa
		  </div>
		  <div class="tab-pane fade" id="tPago" role="tabpanel" aria-labelledby="contact-tab">
		  	Tipo Pago
		  </div>
		  <div class="tab-pane fade" id="concepto" role="tabpanel" aria-labelledby="contact-tab">
		  	<?php require_once 'vConcepto.php'; ?>
		  </div>

		</div>
	  </div>
	  <div class="col-lg-1"></div>
</div>
