function updateConcept(id, valor){
	valorN = document.getElementById("id"+id).innerHTML == "Inactivo" ? 1 : 0;
	valorL = document.getElementById("id"+id).innerHTML == "Inactivo" ? "Activo" : "Inactivo";

	$.ajax({
		data: 	{ id:valor, status:valorN },
		url: 	'ajax/aUpdateConcepto.php',
		type: 	'post',
		success: function(response){
			if(response == 1){
				document.getElementById("id"+id).innerHTML = valorL;
				message('Operación Exitosa','El estado se actualizo correctamente','success');
			}else{
				message('Error en la operación','Error al actualizar el estado','danger');
			}
		}
	});
}

function selectConceptData(valor){

	$.ajax({
		data: { idConcept: valor },
		url:  'ajax/aUpdateConcepto.php',
		type: 'post',
		success: function(response){
			data = response.split("|");
			document.getElementById("txtId").value = data[0];
			document.getElementById("txtDescripcion").value = data[1];
			document.getElementById("txtValor").value = data[2];
			document.getElementById("txtStatus").value = data[3];
		}
	});
}



function pagosIngresar(dato){
	var datosFecha = document.getElementById(dato.value+dato.id).value;
	datosFecha = datosFecha.split('|');

	 $.ajax({
		 data:  {fechaPago:datosFecha[0], placaPago:datosFecha[1], idPlaca:dato.id}, 
		 url:   'controllers/pagosVehiculos.php', 
		 type:  'post', 
		 success:  function (response) { 
		    //$("#tablePagos").html(response);
		 }
	 });


}


function modificarConcepto(id){
	var con = id+'S';
	var id = document.getElementById(id);
	var concepto = document.getElementById(con);

	if(concepto.value == ''){
		alert('Alerta!!! El Concepto esta Vacio');
	}else{
		 $.ajax({
		    data:  {id:id.value, con:concepto.value}, 
		    url:   'controllers/vehiculosInusuales.php', 
		    type:  'post', 
		    success:  function (response) { 
		       $("#tableMostrar").html(response);
		    }
	    });
	}
	
}


function buscarUsuario(){
	var cedula = document.getElementById('cedula');

	 $.ajax({
	    data:  {id:cedula.value}, 
	    url:   'views/modificarUsuario.php', 
	    type:  'post', 
	    success:  function (response) { 
	       $("#usuario").html(response); 
	    }
    });
} 

function buscarVehiculo(){
	var placa = document.getElementById('placa');

	 $.ajax({
	    data:  {placa:placa.value}, 
	    url:   'views/modificarVehiculo.php', 
	    type:  'post', 
	    success:  function (response) { 
	       $("#vehiculo").html(response);
	    }
    });
}

function buscarEmblema(){
	var emblema = document.getElementById('emblema');
	 $.ajax({
	    data:  {marca:emblema.value}, 
	    url:   'views/modificarEmblema.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#emblemas").html(response);
	    }
    });
}

function buscarLinea(){
	var lineaE = document.getElementById('lineaE');
	 $.ajax({
	    data:  {linea:lineaE.value}, 
	    url:   'controllers/modificarLinea.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#lineaF").html(response);
	    }
    });
}

function buscarColor(){
	var color = document.getElementById('colorD');
	 $.ajax({
	    data:  {colorD:color.value}, 
	    url:   'controllers/modificarColor.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#colorF").html(response);
	    }
    });
}

function buscarCarroceria(){
	var carroceria = document.getElementById('carroceriaP');
	 $.ajax({
	    data:  {t_carro:carroceria.value}, 
	    url:   'controllers/modificarTCarro.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#t_carro").html(response);
	    }
    });
}

function buscaTarifa(){
	var tarifa = document.getElementById('tarifa');
	 $.ajax({
	    data:  {t_tarifa:tarifa.value}, 
	    url:   'controllers/modificarTarifa.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#tarifaF").html(response);
	    }
    });
}

function buscaTPago(){
	var pago = document.getElementById('t_pago');
	 $.ajax({
	    data:  {pago:pago.value}, 
	    url:   'controllers/modificarTPago.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#pagoTipo").html(response);
	    }
    });
}

function buscarConcepto(){
	var concepto = document.getElementById('concepto');
	 $.ajax({
	    data:  {idConcep:concepto.value}, 
	    url:   'controllers/modificarConcepto.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#conceptoF").html(response);
	    }
    });
}


function cargarLinea(dato){
	 $.ajax({
	    data:  {id:dato.value}, 
	    url:   'models/lineaSelect.php', 
	    type:  'post', 
	    success:  function (response) { 
	        $("#linea").html(response);
	    }
    });
}


