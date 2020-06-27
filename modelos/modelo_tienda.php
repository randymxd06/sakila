<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerTiendas($conexion){

    $sql = "SELECT store_id FROM store";

    return $conexion->query($sql)->fetchAll();

}
