<div class="content-9" id='conceptoF'>
	<h2>Modificar Concepto</h2>
	<form method="post" action="controllers/ingresarConcepto.php"> 
		<input required class="form-control mt-2 text-capitalize" name='conceptoD' readonly value="<?php echo $concepto; ?>">

	   <input required class="form-control mt-2 text-capitalize" name='concepto' id='concepto' placeholder="Ingresa la descripción del Concepto" maxlength="30" tabindex="1" required>

	   <input type="hidden" name="op" value="1">
		<div class='boton mt-2 '>
			<button type="sumit" class="btn btn-link ml-2 float-right">
				<img src="libraries/image/Editar.png" width="23" height="23">
			</button>
		</div>
	</form>
</div>