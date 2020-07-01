<?php

$nombrePagina = "actor";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

$actores = obtenerActores($conexion);

//Declarar variables//
$nombreActor = $_GET['inputNombreActor'] ?? "";
$apellidoActor = $_GET['inputApellidoActor'] ?? "";
$btnGuardadDatos = $_GET['btnGuardarDatos'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Datos//
if(isset($_GET['btnGuardarDatos'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_actor.php";