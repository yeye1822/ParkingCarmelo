<div class="content-9" id='conceptoF'>
	<h2>Ingresar Concepto</h2>
	<form method="post" action="controllers/ingresarConcepto.php"> 
	   <input required class="form-control mt-2 text-capitalize" name='concepto' id='concepto' placeholder="Ingresa la descripción del Concepto" maxlength="30" tabindex="1" required>
		<div class='boton mt-2 '>
			<button type="reset" class="btn btn-link ml-2 float-right" tabindex="3">
				<img src="libraries/image/agregar.png" width="23" height="23">
			</button>
			<button type="submit" class="btn btn-link ml-2 float-right">
			     <img src="libraries/image/Guardar.png" width="23" height="23">
			</button>
			<button type="button" class="btn btn-link ml-2 float-right" tabindex="2" onclick="buscarConcepto()">
			     <img src="libraries/image/Buscar1.png" width="23" height="23">
			</button>	
		</div>
	</form>
</div>