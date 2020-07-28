<?php

$nombrePagina = "dirección";

require_once "funciones/ayudante.php";

//Incluir los modelos//
require_once "modelos/modelo_ciudad.php";
require_once "modelos/modelo_direccion.php";

$direcciones = obtenerDirecciones($conexion);
$ciudades = obtenerCiudades($conexion);

$direccion = $_POST['direccion'] ?? "";
$direccion2 = $_POST['direccion2'] ?? "";
$distrito = $_POST['distrito'] ?? "";
$ciudad = $_POST['ciudad'] ?? "";
$codigoPostal = $_POST['codigoPostal'] ?? "";
$telefono = $_POST['telefono'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Dirección//
if(isset($_POST['btnGuardarDireccion'])){
    //Codigo para la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_direccion.php";