<div class="content-8" id= 'pagoTipo'>
	 <h2>Ingresar Tipo de pago</h2>
	<form method="post" action="controllers/tipoPago.php"> 
		   <input required class="form-control mt-2 text-capitalize" name='t_pago' id='t_pago' placeholder="Ingrese el tipo de pago" tabindex="1" maxlength="30"> 
		  
			<div class='boton mt-2 '>
				<button type="reset" class="btn btn-link ml-2 float-right">
					   <img src="libraries/image/agregar.png" width="23" height="23">
				</button>
				<button type="submit" class="btn btn-link ml-2 float-right">
				      <img src="libraries/image/Guardar.png" width="23" height="23">
				</button>
				<button type="button" class="btn btn-link ml-2 float-right" onclick="buscaTPago()">
				      <img src="libraries/image/Buscar1.png" width="23" height="23">
				</button>	
			</div>
	</form>
</div>