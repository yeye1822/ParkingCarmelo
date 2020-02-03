<?php

class Connection {

	private $servidor = "localhost";
	private $usuario = "root";
	private $password = "";
	private $database = "parkingcarmelo";

	public function connect(){
		$connection = mysqli_connect(  $this->servidor,
									  $this->usuario,
									  $this->password,
									  $this->database
		);

		return $connection;
	}
}