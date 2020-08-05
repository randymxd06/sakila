<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerCategorias($conexion){

    $sql = "SELECT category_id, name FROM category ORDER BY category_id DESC;";

    return $conexion->query($sql)->fetchAll();

}

function insertarCategorias($conexion, $datos){

    $sql = "INSERT INTO category (name) VALUES (:categoria)";

    return $conexion->prepare($sql)->execute($datos);

}

function editarCategorias($conexion, $datos){

    $sql = "UPDATE category SET name = :categoria WHERE category_id = :idCategoria;";

    return $conexion->prepare($sql)->execute($datos);

}

function eliminarCategorias($conexion, $datos){

    $sql = "UPDATE film_category SET category_id = 1 WHERE category_id = :idCategoria;
            DELETE FROM category WHERE category_id = :idCategoria;";

    return $conexion->prepare($sql)->execute($datos);
}

function obtenerCategoriaPorId($conexion, $datos){

    $sql = "SELECT * FROM category WHERE category_id = :idCategoria;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}