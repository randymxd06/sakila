<?php

require_once "funciones/ayudante.php";

$nombrePagina = "tienda";

//Incluir modelos//
require_once "modelos/modelo_personal.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";

$informacionTiendas = obtenerInformacionTiendad($conexion);
$direcciones = obtenerDirecciones($conexion);
$personales = obtenerPersonal($conexion);


//Declaro variables para obtener informacion//
$personal = $_POST['personal'] ?? "";
$direccion = $_POST['direccion'] ?? "";

if(isset($_POST['btnGuardarTienda'])){
    //Codigo para guardar en la base de datos//
}

//Incluir vista//
include_once "vistas/vista_tienda.php";