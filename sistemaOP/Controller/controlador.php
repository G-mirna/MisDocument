<?php
// controller/controlador.php

include('../config.php');
include('../model/modelo.php');
include('../view/vista.php');

class Controlador {
    private $modelo;
    private $vista;

    public function __construct($conexion) {
        $this->modelo = new Modelo($conexion);
        $this->vista = new Vista();
    }

    // Aquí puedes agregar funciones para manejar la lógica del negocio
}

// Crear instancia del controlador
$controlador = new Controlador($mysqli);
?>
