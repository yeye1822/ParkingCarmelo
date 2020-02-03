<?php 
require_once 'MconsInusuales.php';

$id = $_POST['id'];

echo "<option value=''>- Selecciona la Linea -</option>";

$obj = new conInusuales();
$linea = $obj->consultarLinea($id);

foreach ($linea as $key) {
    echo "<option value=".$key[0].">".$key[1]."</option>";
}
            
 ?>

 
      		
      