<?php

$nombrePagina = "ciudad";

require_once "funciones/ayudante.php";

//Incluir los modelos//
require_once "modelos/modelo_pais.php";

$paises = obtenerPaises($conexion);


//Declaro variables para obtener los datos//
$ciudad = $_GET['ciudad'] ?? "";
$pais = $_GET['pais'] ?? "";

if(isset($_GET['btnGuardarCiudad'])){
    //Codigo para guardar en la base de datos//
}
//Incluir la vista//
include_once "vistas/vista_ciudad.php";