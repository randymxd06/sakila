<?php

$nombrePagina = "película";

require_once "funciones/ayudante.php";

//Incluyo los modelos//
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_pelicula.php";

$peliculas = obtenerPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

//Declaro variables para obtener datos//
$pelicula = $_POST['pelicula'] ?? "";
$descripcion = $_POST['descripcion'] ?? "";
$añoLanzamiento = $_POST['añoLanzamiento'] ?? "";
$idioma = $_POST['idioma'] ?? "";
$duracionAlquiler = $_POST['duracionAlquiler'] ?? "";
$tarifaAlquiler = $_POST['tarifaAlquiler'] ?? "";
$costoReemplazo = $_POST['costoReemplazo'] ?? "";
$clasificacion = $_POST['clasificacion'] ?? "";
$duracionPelicula = $_POST['duracionPelicula'] ?? "";
$caracteristicasPelicula = $_POST['caracteristicasPelicula'] ?? "";

if(isset($_POST['datetime-local'])){
    //Codigo para guardar en la base de datos//
}


//Incluir la vista//
include_once "vistas/vista_pelicula.php";