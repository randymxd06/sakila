<?php

require_once "funciones/ayudante.php";

$nombrePagina = "tienda";

require_once "modelos/modelo_personal.php";
$personales = obtenerPersonal($conexion);
require_once "modelos/modelo_direccion.php";
$direcciones = obtenerDirecciones($conexion);

//Declaro variables para obtener informacion//
$personal = $_GET['personal'] ?? "";
$direccion = $_GET['direccion'] ?? "";

if(isset($_GET['btnGuardarTienda'])){
    //Codigo para guardar en la base de datos//
}

//Incluir vista//
include_once "vistas/vista_tienda.php";