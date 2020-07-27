<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerDirecciones($conexion){

    $sql = "SELECT ad.address_id, ad.address, ad.address2, ad.district, ci.city, ad.postal_code, ad.phone
    FROM address AS ad
    INNER JOIN city AS ci ON ci.city_id = ad.city_id";

    return $conexion->query($sql)->fetchAll();

}