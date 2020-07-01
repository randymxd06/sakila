<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$categorias = obtenerCategorias($conexion);

$nombrePagina = "categoría";

$categoria = $_GET['categoria'] ?? "";

if(isset($_GET['btnGuardarCategoria'])){
    //Codigo para guardar en la base de datos//
}

//Incluir vista//
include_once "vistas/vista_categoria.php";