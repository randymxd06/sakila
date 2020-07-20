<?php

$nombrePagina = "cliente";

require_once "funciones/ayudante.php";

//Incluyo los modelos//
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_cliente.php";

$clientes = obtenerClientes($conexion);
$tiendas = obtenerTiendas($conexion);

//Declaro variables para obtener datos//
$tienda = $_POST['tienda'] ?? "";
$primerNombre = $_POST['primerNombre'] ?? "";
$apellido = $_POST['apellido'] ?? "";
$correo = $_POST['correo'] ?? "";
$direccion = $_POST['direccion'] ?? "";
$activo = $_POST['activo'] ?? "";

if(isset($_POST['btnGuardarCliente'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_cliente.php";