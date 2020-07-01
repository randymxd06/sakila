<?php

$nombrePagina = "país";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
$paises = obtenerPaises($conexion);

$pais = $_GET['pais'] ?? "";

if(isset($_GET['btnGuardarPais'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_pais.php";