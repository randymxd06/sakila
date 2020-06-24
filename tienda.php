<?php

require_once "funciones/ayudante.php";

$nombrePagina = "tienda";

$personal = $_GET['personal'] ?? "";
$direccion = $_GET['direccion'] ?? "";

if(isset($_GET['btnGuardarTienda'])){
    //Codigo para guardar en la base de datos//
}

//Incluir vista//
include_once "vistas/vista_tienda.php";