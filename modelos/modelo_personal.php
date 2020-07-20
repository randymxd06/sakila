<?php

require_once "config/conexion.php";

function obtenerPersonal($conexion){

    $sql = "SELECT staff_id, first_name, last_name FROM staff;";

    return $conexion->query($sql)->fetchAll();

}

function insertarPersonal($conexion, $datos){

    $sql = "";

    return $conexion->prepare($sql)->execute($datos);

}