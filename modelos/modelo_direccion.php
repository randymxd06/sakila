<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerDirecciones($conexion){

    $sql = "SELECT address_id, address FROM address";

    return $conexion->query($sql)->fetchAll();

}