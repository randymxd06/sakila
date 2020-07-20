<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerCategorias($conexion){

    $sql = "SELECT category_id, name FROM category";

    return $conexion->query($sql)->fetchAll();

}

function insertarCategorias($conexion, $datos){

    $sql = "INSERT INTO category (name) VALUES (:categoria)";

    return $conexion->prepare($sql)->execute($datos);

}