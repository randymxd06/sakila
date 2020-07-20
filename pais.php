<?php

$nombrePagina = "país";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
$paises = obtenerPaises($conexion);

$pais = $_POST['pais'] ?? "";

if(isset($_POST['btnGuardarPais'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_pais.php";