<?php 

class InformesControllers{
	public function seeInformesInusual($fecha){

	   $obj = new InformCar();
       return $obj->carInusual($fecha);
	}

	public function seeReportMonthly($fecha){
		$obj = new InformCar();
		return $obj->carMensual($fecha);
	}
}