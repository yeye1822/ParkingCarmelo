function showPlate( data ){
	document.getElementById('plataForm').innerHTML = '<h1 class="placeText text-uppercase">'+ data +'</h1>';
}

function validNumber(object){
	var numero = object.value;

	if (!/^([0-9])*$/.test(numero)){
		object.value = numero.substring(0,numero.length-1);
	}
}