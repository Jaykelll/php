<?php
include './FormPersonal.php';

$nombres = 'fabian';
$apellidos = 'carvajal';
$fecha_de_nacimiento = '20-07-0000';
$documento = '555';
$tipo_de_documento = 'cc';
$telefono = '788';
$direccion = 'calle 48 #86';
$ciudad = 'bogota';
$email = 'fabian@gmail.com';

$userBasics = new FormPersonal($nombres, $apellidos, $fecha_de_nacimiento, $documento, $tipo_de_documento, $telefono, $direccion, $ciudad, $email);

echo $userBasics->getDataFormatted();

