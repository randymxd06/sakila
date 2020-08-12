<?php

require_once "config/conexion.php";

function obtenerCiudades($conexion){

    $sql = "SELECT ci.city_id, ci.city, co.country 
            FROM city AS ci
            INNER JOIN country AS co ON co.country_id = ci.country_id
            ORDER BY ci.city_id DESC";

    return $conexion->query($sql)->fetchAll();
    
}

function insertarCiudades($conexion, $datos){

    $sql = "INSERT INTO city (city, country_id) VALUES (:ciudad, :pais)";

    return $conexion->prepare($sql)->execute($datos);

}

function eliminarCiudades($conexion, $datos){
    
    $sql = "UPDATE address SET city_id = 1 WHERE city_id = :idCiudad;
            DELETE FROM city WHERE city_id = :idCiudad;";

    /*$sentencia = $conexion->prepare($sql);
    $sentencia->bindValue('actor_id', $datos['id']);

    return $sentencia->execute();*/

    return $conexion->prepare($sql)->execute($datos);

}

function obtenerCiudadPorId($conexion, $datos){

    $sql = "SELECT * FROM city WHERE city_id = :idCiudad;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}

function editarCiudad($conexion, $datos){

    $sql = "UPDATE city SET city = :ciudad, country_id = :pais WHERE city_id = :idCiudad;";

    return $conexion->prepare($sql)->execute($datos);

}