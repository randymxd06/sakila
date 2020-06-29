<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerCategorias($conexion){

    $sql = "SELECT category_id, name FROM category";

    return $conexion->query($sql)->fetchAll();

}