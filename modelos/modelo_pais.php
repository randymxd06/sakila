<?php

require_once "config/conexion.php";

//Funcion para obtener los paises//
function obtenerPaises($conexion){

    $sql = "SELECT country_id, country FROM country ORDER BY country_id DESC";

    return $conexion->query($sql)->fetchAll();

}

//Funcion para insertar datos a las tablas//
function insertarPaises($conexion, $datos){

    $sql = "INSERT INTO country (country) VALUES (:pais)";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para editar los datos de las tablas//
function editarPaises($conexion, $datos){

    $sql = "UPDATE country SET country = :pais WHERE country_id = :idPais;";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para eliminar los datos de las tablas//
function eliminarPaises($conexion, $datos){

    $sql = "UPDATE city SET country_id = 1 WHERE country_id = :idPais;
            DELETE FROM country WHERE country_id = :idPais;";

    return $conexion->prepare($sql)->execute($datos);

}

//Funcion para obtener los paises por el id//
function obtenerPaisPorId($conexion, $datos){

    $sql = "SELECT * FROM country WHERE country_id = :idPais;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}