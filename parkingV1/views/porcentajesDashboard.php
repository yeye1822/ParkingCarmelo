  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
  	<div class='contUno'>
  		<h1><?php echo round($entrada[0]/$total,0,PHP_ROUND_HALF_UP).'%'; ?></h1>
  		<h3><strong><?php echo $entrada[0]; ?></strong></h3>
  		<h2>Entradas</h2>
  	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
  	<div class='contDos'>
  		<h1><?php echo round($salidas[0]/$total,0,PHP_ROUND_HALF_UP).'%'; ?></h1>
  		<h3><strong><?php echo $salidas[0]; ?></strong></h3>
  		<h2>Salidas</h2>	
  	</div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  	<div class='contTres'>
  		<h1><?php echo round($visitas[0]/$total,0,PHP_ROUND_HALF_UP).'%'; ?></h1>
  		<h3><strong><?php echo $visitas[0]; ?></strong></h3>
  		<h2>Visitas</h2>
  	</div>
  </div>