<?php

require_once "funciones/ayudante.php";

$nombrePagina = "principal";

//Declarar variables//
$nombre = $_GET['inputNombre'] ?? "";
$edad = $_GET['inputEdad'] ?? "";
$ciudad = $_GET['inputCiudad'] ?? "";
$q = $_GET['q'] ?? "";
$monto = $_GET['monto'] ?? "";


//Incluir la vista//
include_once "vistas/vista_principal.php";