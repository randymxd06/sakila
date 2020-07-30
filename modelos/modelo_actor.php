<?php

require_once "config/conexion.php";

function obtenerActores($conexion){

    $sql = "SELECT * FROM actor;";

    return $conexion->query($sql)->fetchAll();

}

function insertarActores($conexion, $datos){

    $sql = "INSERT INTO actor (first_name, last_name) VALUES (:inputNombreActor, :inputApellidoActor);";

    return $conexion->prepare($sql)->execute($datos);

}

function eliminarActores($conexion, $datos){

    $sql = "DELETE FROM film_actor WHERE actor_id = :id;
            DELETE FROM actor WHERE actor_id = :id;";

    /*$sentencia = $conexion->prepare($sql);
    $sentencia->bindValue('actor_id', $datos['id']);

    return $sentencia->execute();*/

    return $conexion->prepare($sql)->execute($datos);

}