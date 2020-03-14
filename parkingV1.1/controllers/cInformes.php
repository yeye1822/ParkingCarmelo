<?php 

class InformesControllers{
	public function seeInformesInusual($fecha){

	   $obj = new InformCar();
       return $obj->carInusual($fecha);
	}

	public function carInusualInfo($fecha){

	   $obj = new InformCar();
       return $obj->carInusualInfo($fecha);
	}

	public function paymentInusualInfo($fecha){

	   $obj = new InformCar();
       return $obj->paymentInusualInfo($fecha);
	}

	public function seeReportMonthly($fecha){
		$obj = new InformCar();
		return $obj->carMensual($fecha);
	}
}