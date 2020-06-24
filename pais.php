<?php

$nombrePagina = "país";

require_once "funciones/ayudante.php";

$pais = $_GET['pais'] ?? "";

if(isset($_GET['btnGuardarPais'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_pais.php";