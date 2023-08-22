<?php
class FormPersonal {
    
    public $nombres = 'fabian';
    public $apellidos = 'carvajal';
    public $fecha_de_nacimiento = '20-07-0000';
    public $documento = '555';
    public $tipo_de_documento = 'cc';
    public $telefono = '788';
    public $direccion = 'calle 48 #86';
    public $ciudad = 'bogota';
    public $email = 'fabian@gmail.com';
    
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

