<?php

require_once "config/conexion.php";

//Funcion para obtener los paises//
function obtenerIdiomas($conexion){

    $sql = "SELECT language_id, name FROM language ORDER BY language_id DESC;";

    return $conexion->query($sql)->fetchAll();

}

//Funcion para insertar datos a las tablas//
function insertarIdiomas($conexion, $datos){

    $sql = "INSERT INTO language (name) VALUES (:idioma)";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para editar los datos de las tablas//
function editarIdiomas($conexion, $datos){

    $sql = "UPDATE language SET name = :idioma WHERE language_id = :idIdioma;";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para eliminar los datos de las tablas//
function eliminarIdiomas($conexion, $datos){

    $sql = " UPDATE film SET language_id = 1 WHERE language_id = :idIdioma;
             UPDATE film SET original_language_id = NULL WHERE original_language_id = :idIdioma;
             DELETE FROM language WHERE language_id = :idIdioma";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para obtener los paises por el id//
function obtenerIdiomaPorId($conexion, $datos){

    $sql = "SELECT * FROM language WHERE language_id = :idIdioma;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}