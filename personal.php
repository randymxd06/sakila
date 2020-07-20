<?php

$nombrePagina = "personal";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_direccion.php";
$direcciones = obtenerDirecciones($conexion);
require_once "modelos/modelo_tienda.php";
$tiendas = obtenerTiendas($conexion);

//Declaro variables para obtener informacion//
$nombre = $_POST['nombre'] ?? "";
$apellido = $_POST['apellido'] ?? "";
$direccion = $_POST['direccion'] ?? "";
$foto = $_POST['foto'] ?? "";
$correo = $_POST['correo'] ?? "";
$tienda = $_POST['tienda'] ?? "";
$activo = $_POST['activo'] ?? "";
$nombreUsuario = $_POST['nombreUsuario'] ?? "";
$contraseña = $_POST['contraseña'] ?? "";

if(isset($_POST['btnGuardarPersonal'])){
    //Codigo para guardar en la base de datos//
}

//Incluir la vista//
include_once "vistas/vista_personal.php";