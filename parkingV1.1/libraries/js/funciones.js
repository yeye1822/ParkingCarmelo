function payParking(data){

	var dia = document.getElementById("dia"+data).value;
	var hora = document.getElementById("hora"+data).value;
	var placa = document.getElementById("placa"+data).value
	var minutos = document.getElementById("minutos"+data).value;
	var valor = document.getElementById("valor"+data).value;
	var idRegistro = document.getElementById("idRegistro"+data).value;
	var fechafin = document.getElementById("fechafin"+data).value;
	var valorHtml = valor.split("-"); 
	var condition = false;

	if(valor == 0 ){
		Swal.fire('Seleccione un tipo de pago');
		return;
	}

	if(valorHtml[0] == 1) valorHtml[0] = 0;
	if(parseInt(minutos) >= 0) horas = parseInt(hora) + 1 ; 
	if(parseInt(dia) > 0) horas = parseInt(horas) + (parseInt(dia) * 24); 

	daysMitad = horas/12;
	daysCompleto = horas/24;

	if( valorHtml[0] == 0 ){
		Swal.fire({
		 title: "Advertencia",
		 text: "El concepto seleccionado no genera cobro, si desea continuar con el concepto["+valorHtml[1]+"], presiona el boton continuar, de lo contrario presiona cancelar",
		 icon: 'warning',
		 showCancelButton: true,
		 cancelButtonText: 'Cancelar',
		 confirmButtonColor: '#3085d6',
		 cancelButtonColor: '#d33',	
		 confirmButtonText: 'Continuar'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:0 , condition: 0 }, 
					 url:   'controllers/pagosVehiculos.php', 
					 type:  'post', 
					 success:  function (response) { 
					 	window.location.href = "InformesInusual";
					 }
				 });
			}
		})
		return;
	}

	if(horas >= 0 && horas < 9) {

		if((valorHtml[1].toUpperCase().indexOf("HORAS") != -1 || valorHtml[1].toUpperCase().indexOf("HORA") != -1)){

			amount = new Intl.NumberFormat("de-DE").format(valorHtml[0] * Math.ceil(horas));
			message = "Tiempo transcurrido: "+Math.ceil(horas)+" "+valorHtml[1]+", Valor parqueo: "+ amount;

			Swal.fire(
				'Valor a Pagar!',
				message
			).then((response) => {
				if(response.value){
					$.ajax({
						 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:amount.replace(".",""), condition: 0 }, 
						 url:   'controllers/pagosVehiculos.php', 
						 type:  'post', 
						 success:  function (response) { 
						 	window.location.href = "InformesInusual";
						 }
					 });
				}
			})
		}else{
			Swal.fire('El concepto no aplica, las horas en curso es menor al concepto');
			return;
		}

	}else if(horas > 8 && horas < 18){
		if(
			valorHtml[1].toUpperCase().indexOf("DIA") != -1 || valorHtml[1].toUpperCase().indexOf("DIAS") != -1 ||
			valorHtml[1].toUpperCase().indexOf("DÍA") != -1 || valorHtml[1].toUpperCase().indexOf("DÍAS") != -1 ||
			valorHtml[1].toUpperCase().indexOf("NOCHE") != -1 || valorHtml[1].toUpperCase().indexOf("NOCHES") != -1
			){
			amount = new Intl.NumberFormat("de-DE").format(valorHtml[0] * Math.ceil(daysMitad));
			message = "Tiempo transcurrido: "+Math.ceil(daysMitad)+" "+valorHtml[1]+", Valor parqueo: "+ amount;

			Swal.fire(
				'Valor a Pagar!',
				message
			).then((response) => {
				if(response.value){
					$.ajax({
						 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:amount.replace(".",""), condition: 0 }, 
						 url:   'controllers/pagosVehiculos.php', 
						 type:  'post', 
						 success:  function (response) { 
						 	window.location.href = "InformesInusual";
						 }
					 });
				}
			})
		}else if(valorHtml[1].toUpperCase().indexOf("JORNADA") != -1 || valorHtml[1].toUpperCase().indexOf("COMPLETA") != -1){
			Swal.fire('El concepto no aplica, las horas en curso es menor al concepto');
			return;
		}else{
			Swal.fire({
			 title: "Alerta, Se recomienda realizar el pago por días o por noches",
			 text: "Cancele la operación o dale continuar para realizar el pago por "+valorHtml[1],
			 icon: 'warning',
			 showCancelButton: true,
			 cancelButtonText: 'Cancelar',
			 confirmButtonColor: '#3085d6',
			 cancelButtonColor: '#d33',	
			 confirmButtonText: 'Continuar'
			}).then((result) => {
				if (result.value) {

					amount =  new Intl.NumberFormat("de-DE").format(valorHtml[0] * Math.ceil(horas));
					message = "Tiempo transcurrido: "+Math.ceil(horas)+" "+valorHtml[1]+", Valor parqueo: "+ amount;
					
					Swal.fire(
						'Valor a Pagar!',
						message
					).then((response) => {
						if(response.value){

							$.ajax({
								 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:amount.replace(".",""), condition: 0 }, 
								 url:   'controllers/pagosVehiculos.php', 
								 type:  'post', 
								 success:  function (response) { 
								 	window.location.href = "InformesInusual";
								 }
							 });
						}
					}) 

				}
			})
		}
	}else if( horas >= 18 ){
		if(valorHtml[1].toUpperCase().indexOf("JORNADA") != -1 || valorHtml[1].toUpperCase().indexOf("COMPLETA") != -1){
			amount = new Intl.NumberFormat("de-DE").format(valorHtml[0] * Math.ceil(daysMitad));
			message = "Tiempo transcurrido: "+Math.ceil(daysMitad)+" "+valorHtml[1]+", Valor parqueo: "+ amount;

			Swal.fire(
				'Valor a Pagar!',
				message
			).then((response) => {
				if(response.value){
					$.ajax({
						 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:amount.replace(".",""), condition: 0 }, 
						 url:   'controllers/pagosVehiculos.php', 
						 type:  'post', 
						 success:  function (response) { 
						 	window.location.href = "InformesInusual";
						 }
					 });
				}
			})
		}else{
			Swal.fire({
			 title: "Alerta, Se recomienda realizar el pago con el concepto Jornada Completa",
			 text: "Cancele la operación o dale continuar para realizar el pago por "+valorHtml[1],
			 icon: 'warning',
			 showCancelButton: true,
			 cancelButtonText: 'Cancelar',
			 confirmButtonColor: '#3085d6',
			 cancelButtonColor: '#d33',	
			 confirmButtonText: 'Continuar'
			}).then((result) => {
				if (result.value) {
					amount =  new Intl.NumberFormat("de-DE").format(valorHtml[0] * Math.ceil(horas));
					message = "Tiempo transcurrido: "+Math.ceil(horas)+" "+valorHtml[1]+", Valor parqueo: "+ amount;
					
					Swal.fire(
						'Valor a Pagar!',
						message
					).then((response) => {
						if(response.value){

							$.ajax({
								 data:  {idRegistro:idRegistro, secuenciaSalida: 1, fechaSalida: fechafin, concepto:valorHtml[2], pago: 1, amount:amount.replace(".",""), condition: 0 }, 
								 url:   'controllers/pagosVehiculos.php', 
								 type:  'post', 
								 success:  function (response) { 
								 	window.location.href = "InformesInusual";
								 }
							 });
						}
					}) 
				}
			})
		}
	}
}


function actualizarHora(){
	var obj = new Date();
	var hora = obj.getHours();
	var min = obj.getMinutes();
	var amPm = (hora > 11)? "PM" : "AM";

	if(hora > 12){
		hora -= '12';
	}else if(hora == 0){
		hora = '12';
	}
	if(min < 10){
		min = '0' + min;
	}
	document.getElementById('hora').innerHTML = hora+':'+min+' '+amPm;	
	
}

function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
     if (tecla==9){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function quitarMensaje(){
	var lin = window.location.href;
		lin = lin.split("&");
	    lin = lin[0].split('=');
		location.replace(lin[1]);
}

function mensaje(dato){
	var mensaje = document.getElementById('mensaje');
	var dta = dato.split('_'); 

	if(dta[0] == 1){
		mensaje.className = "input-group col-sm-10 alert alert-success mt-3 pt-3 mb-3 container-fluid";
		mensaje.innerHTML = dta[1];
		//setTimeout(function(){quitarMensaje()},1000);
	}else{	
		mensaje.className = "input-group col-sm-10 alert alert-danger mt-3 pt-3 mb-3 container-fluid";
		mensaje.innerHTML = dta[1];
		//setTimeout(function(){quitarMensaje()},1000);
	}
	
}

function writeTimeReal(data){
	if(data.value.length == 0){
		document.getElementById("writeTime").innerHTML = "******";
	}else{
		document.getElementById("writeTime").innerHTML = data.value.toUpperCase();
	}
}

setInterval(actualizarHora,1000);


