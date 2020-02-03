<?php 
require_once 'db/conexion.php';

class conInusuales{

	public function mostrarDatosInusuales(){
		$con = new conectar();
		$conexion = $con->conexion();
		$date = date('Y-m-d');
		$sql = "SELECT date(fechaEntrada),placaInusual,idRegistro FROM registrocarro WHERE idCarroPK = 2 AND Inusual = 'Inusual' AND idConceptoFK = 1 and DATE(fechaEntrada) = '$date'";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}

	public function mostrarConcepto(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM conceptoparq WHERE idParq <> 1";
		$result = mysqli_query($conexion,$sql);
		return mysqli_fetch_all($result);
	}

	public function consultarEst(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM parqestado WHERE 1";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarEmblema(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM marcacarro WHERE 1 ORDER BY descripcionMarca ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarUsuario(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT idUsuario,cedulaUsuario,nombreUsuario,apllidoUsuario FROM parqusuarios WHERE 1 ORDER BY nombreUsuario ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarValor(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT intTarifa,valorTarifa FROM tarifacarro WHERE 1 ORDER BY valorTarifa ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarCarroceria(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM tipocarro WHERE 1 ORDER BY descripcionTipo ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarColor(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM colorcarro WHERE 1 ORDER BY descripcionColor ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarLinea($dato){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT idReferencia,descripcionReferencia FROM referenciacarro WHERE fkreferencia = dato ORDER BY descripcionReferencia ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

	public function consultarTPago(){
		$con = new conectar();
		$conexion = $con->conexion();
		$sql = "SELECT * FROM tipopagocarro WHERE 1 ORDER BY descripcionTipopago ASC";
		$result = mysqli_query($conexion,$sql);

		return mysqli_fetch_all($result);
	}

}

 ?>