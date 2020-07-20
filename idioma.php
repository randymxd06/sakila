<?php

$nombrePagina = "idioma";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_idioma.php";
$idiomas = obtenerIdiomas($conexion);

if(isset($_POST['btnGuardarIdioma'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_idioma.php";