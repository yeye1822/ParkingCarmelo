   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family: 'thebit', Arial, Helvetica;">
      <h1>Vehiculos Inusuales</h1>   
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  	<div class='contUno'>
  		<h1>100 %</h1>
        <h3><strong><?php echo $totalInusual[0]; ?></strong></h3>
  		<h2>Total</h2>
  	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
  	<div class='contDos'>
      <h1><?php echo round(($salidaInusual[0]*100)/($totalInusual[0] == 0 ? 1 : $totalInusual[0]),0,PHP_ROUND_HALF_UP).'%'; ?></h1>
  		<h3><strong><?php echo $salidaInusual[0]; ?></strong></h3>
  		<h2>Salidas</h2>	
  	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  	<div class='contTres'>
  		<h1><?php echo round((($totalInusual[0]-$salidaInusual[0])*100)/($totalInusual[0] == 0 ? 1: $totalInusual[0]),0,PHP_ROUND_HALF_UP).'%'; ?></h1>
  		<h3><strong><?php echo ($totalInusual[0]-$salidaInusual[0]); ?></strong></h3>
  		<h2>Estacionados</h2>
  	</div>
  </div>

  
   <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-family: 'thebit', Arial, Helvetica;">
      <h1>Vehiculos con Mensualidad</h1>   
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class='contTres'>
      <h1>100 %</h1>
        <h3><strong><?php echo $totalMensual[0]; ?></strong></h3>
      <h2>Total</h2>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
    <div class='contDos'>
      <h1><?php echo round(($salidaMensual[0]*100)/$totalMensual[0],0,PHP_ROUND_HALF_UP).'%'; ?></h1>
      <h3><strong><?php echo $salidaMensual[0]; ?></strong></h3>
      <h2>Salidas</h2>  
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class='contUno'>
      <h1><?php echo round((($totalMensual[0]-$salidaMensual[0])*100)/$totalMensual[0],0,PHP_ROUND_HALF_UP).'%'; ?></h1>
      <h3><strong><?php echo ($totalMensual[0]-$salidaMensual[0]); ?></strong></h3>
      <h2>Estacionados</h2>
    </div>
  </div> -->