<?php

class FormPersonal {

    public $nombres;
    public $apellidos;
    public $fecha_de_nacimiento;
    public $documento;
    public $tipo_de_documento;
    public $telefono;
    public $direccion;
    public $ciudad;
    public $email;

    public function __construct($nombres, $apellidos, $fecha_de_nacimiento, $documento, $tipo_de_documento, $telefono, $direccion, $ciudad, $email) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_de_nacimiento = $fecha_de_nacimiento;
        $this->documento = $documento;
        $this->tipo_de_documento = $tipo_de_documento;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }

    public function getDataFormatted() {
        $formattedInfo = "Información del Usuario:<br>";
        $formattedInfo .= "Nombres: " . $this->nombres . "<br>";
        $formattedInfo .= "Apellidos: " . $this->apellidos . "<br>";
        $formattedInfo .= "Fecha de Nacimiento: " . $this->fecha_de_nacimiento . "<br>";
        $formattedInfo .= "Documento: " . $this->documento . "<br>";
        $formattedInfo .= "Tipo de Documento: " . $this->tipo_de_documento . "<br>";
        $formattedInfo .= "Teléfono: " . $this->telefono . "<br>";
        $formattedInfo .= "Dirección: " . $this->direccion . "<br>";
        $formattedInfo .= "Ciudad: " . $this->ciudad . "<br>";
        $formattedInfo .= "Email: " . $this->email . "<br>";

        return $formattedInfo;
    }
}

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

        <label>Apellidos:</label>
        <input type="text" name="apellidos"><br>

        <label>Fecha de Nacimiento:</label>
        <input type="text" name="fecha_de_nacimiento"><br>

        <label>Documento:</label>
        <input type="text" name="documento"><br>

        <label>Tipo de Documento:</label>
        <input type="text" name="tipo_de_documento"><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br>

        <label>Dirección:</label>
        <input type="text" name="direccion"><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad"><br>

        <label>Email:</label>
        <input type="text" name="email"><br>
</body>
</html>
