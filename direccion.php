<?php

$nombrePagina = "dirección";

require_once "funciones/ayudante.php";

//Incluir los modelos//
require_once "modelos/modelo_ciudad.php";

$ciudades = obtenerCiudades($conexion);

$direccion = $_GET['direccion'] ?? "";
$direccion2 = $_GET['direccion2'] ?? "";
$distrito = $_GET['distrito'] ?? "";
$ciudad = $_GET['ciudad'] ?? "";
$codigoPostal = $_GET['codigoPostal'] ?? "";
$telefono = $_GET['telefono'] ?? "";
$ubicacion = $_GET['ubicacion'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Dirección//
if(isset($_GET['btnGuardarDireccion'])){
    //Codigo para la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_direccion.php";