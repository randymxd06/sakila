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

function obtenerActorPorId($conexion, $datos){

    $sql = "SELECT * FROM actor WHERE actor_id = :idActor;";

    $query = $conexion->prepare($sql);
    $query->execute($datos);

    return $query->fetch();

}

function editarActores($conexion, $datos){

    $sql = "UPDATE actor SET first_name = :nombreActor, last_name = :apellidoActor WHERE actor_id = :idActor;";

    return $conexion->prepare($sql)->execute($datos);

}