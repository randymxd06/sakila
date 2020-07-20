<?php

require_once "config/conexion.php";

function obtenerCiudades($conexion){

    $sql = "SELECT ci.city_id, ci.city, co.country 
            FROM city AS ci
            INNER JOIN country AS co ON co.country_id = ci.country_id";

    return $conexion->query($sql)->fetchAll();
    
}

function insertarCiudades($conexion, $datos){

    $sql = "INSERT INTO city (city, country_id) VALUES (:ciudad, :pais)";

    return $conexion->prepare($sql)->execute($datos);

}