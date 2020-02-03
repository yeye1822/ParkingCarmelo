
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


