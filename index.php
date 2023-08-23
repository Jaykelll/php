<?php
include './FormPersonal.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
    $documento = $_POST['documento'];
    $tipo_de_documento = $_POST['tipo_de_documento'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];

    $userBasics = new FormPersonal($nombres, $apellidos, $fecha_de_nacimiento, $documento, $tipo_de_documento, $telefono, $direccion, $ciudad, $email);

    echo $userBasics->getDataFormatted();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario</title>
</head>
<body>
    <form method="post">
        <label>Nombres:</label>
        <input type="text" name="nombres"><br>

        <!-- Resto de los campos del formulario -->

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
