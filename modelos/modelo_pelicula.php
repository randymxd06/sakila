<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerPeliculas($conexion){

    $sql = "SELECT * FROM film";

    return $conexion->query($sql)->fetchAll();

}