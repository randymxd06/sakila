<?php

$nombrePagina = "película";

require_once "funciones/ayudante.php";

//Incluyo el modelo//
require_once "modelos/modelo_idioma.php";
$idiomas = obtenerIdiomas($conexion);

//Declaro variables para obtener datos//
$pelicula = $_GET['pelicula'] ?? "";
$descripcion = $_GET['descripcion'] ?? "";
$añoLanzamiento = $_GET['añoLanzamiento'] ?? "";
$idioma = $_GET['idioma'] ?? "";
$duracionAlquiler = $_GET['duracionAlquiler'] ?? "";
$tarifaAlquiler = $_GET['tarifaAlquiler'] ?? "";
$costoReemplazo = $_GET['costoReemplazo'] ?? "";
$clasificacion = $_GET['clasificacion'] ?? "";
$duracionPelicula = $_GET['duracionPelicula'] ?? "";
$caracteristicasPelicula = $_GET['caracteristicasPelicula'] ?? "";

if(isset($_GET['datetime-local'])){
    //Codigo para guardar en la base de datos//
}


//Incluir la vista//
include_once "vistas/vista_pelicula.php";