<?php

$nombrePagina = "cliente";

require_once "funciones/ayudante.php";

$tienda = $_GET['tienda'] ?? "";
$primerNombre = $_GET['primerNombre'] ?? "";
$apellido = $_GET['apellido'] ?? "";
$correo = $_GET['correo'] ?? "";
$direccion = $_GET['direccion'] ?? "";
$activo = $_GET['activo'] ?? "";

if(isset($_GET['btnGuardarCliente'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_cliente.php";