<?php 
require_once 'models/porcentajeDash.php';
$obj = new porcentajeDash();

$totalInusual = $obj->totalInusual();
$salidaInusual = $obj->salidaInusual();

$totalMensual = $obj->totalMensual();
$salidaMensual = $obj->salidaMensual();


 require_once 'views/porcentajesDashboard.php';
