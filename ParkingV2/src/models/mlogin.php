 <?php
 require_once "../../libraries/db/conexion.php";

 class Loguin{


 	public function showData($data){
	 	$connection = new Connection();
	 	$connectBD = $connection->connect();

 		$query = "SELECT idUsuario, nombreUsuario, apllidoUsuario, estadoUsuarioPK FROM parqusuarios WHERE cedulaUsuario = '$data'";
 		$result = mysqli_query($connectBD, $query);
 		return mysqli_fetch_row($result);
 	}

 	public function consultPassword($data){
 		$connection = new Connection();
	 	$connectBD = $connection->connect();

	 	$query = "SELECT * FROM parqpassword WHERE idUsuarioFK = $data[0] AND PasswordP = '$data[1]'";
		$result = mysqli_query($connectBD,$query);
		return mysqli_fetch_row($result);
 	}
 }