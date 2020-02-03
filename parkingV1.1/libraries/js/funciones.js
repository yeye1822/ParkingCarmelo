
/*function window_onload(){
	var conten = document.getElementsByClassName("cont");
	var conten1 = document.getElementsByClassName("cont1");

	//for de los div de los porcentajes
	for(var i = 0; i < conten1.length; i++){
		conten1[i].style.height = "200px";
	}

	//for de los div de las graficas
	for(var i = 0; i < conten.length; i++){
		conten[i].style.height = "400px";
	}
}*/
function payParking(data){

	var dia = document.getElementById("dia"+data).value;
	var hora = document.getElementById("hora"+data).value;
	var placa = document.getElementById("placa"+data).value
	var minutos = document.getElementById("minutos"+data).value;
	var valor = document.getElementById("valor"+data).value;
	var message;
	var horas;
	var valorHtml = valor.split("-");




	if(valor == 0 ){
		Swal.fire('Seleccione un tipo de pago');
		return;
	}

	if((valorHtml[1].toUpperCase().indexOf("NOCHE")>0) || (valorHtml[1].toUpperCase().indexOf("DIA")>0)){
		if(parseInt(hora) > 0) dia = parseInt(dia) + 1; 
		if((valorHtml[1].toUpperCase().indexOf("NOCHE")>0)){
			message = "Hoal";
		}

		if((valorHtml[1].toUpperCase().indexOf("DIA")>0)){
			message = "Hola";
		}

	}else{
		if(valorHtml[0] == 1) valorHtml[0] = 0;
		if(parseInt(minutos) > 0) horas = parseInt(hora) + 1 ; 
		if(parseInt(dia) > 0) horas = parseInt(horas) + (parseInt(dia) * 24); 

		hora = horas > 24 ? horas-1 : hora;

		message = "Tiempo de parqueo: "+horas+" Horas\nValor del parqueo: "+ new Intl.NumberFormat("de-DE").format(valorHtml[0] * horas) +" Pesos\nTotal tiempo transcurrido: "+hora+":"+minutos+" Horas";
	}

	alert(message);

	// Swal.fire({
	//   title: 'Verifica bien los datos, antes de continuar?',
	//   text: "You won't be able to revert this!",
	//   icon: 'warning',
	//   showCancelButton: true,
	//   confirmButtonColor: '#3085d6',
	//   cancelButtonColor: '#d33',
	//   confirmButtonText: 'Yes, delete it!'
	// }).then((result) => {
	//   if (result.value) {
	//     Swal.fire(
	//       'Deleted!',
	//       'Your file has been deleted.',
	//       'success'
	//     )
	//   }
	// })

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

setInterval(actualizarHora,1000);


