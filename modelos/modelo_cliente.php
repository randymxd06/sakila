<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerClientes($conexion){

    $sql = "SELECT cus.customer_id, sto.store_id, cus.first_name, cus.last_name, cus.email, ad.address
    FROM customer AS cus
    INNER JOIN store AS sto ON sto.store_id = cus.store_id
    INNER JOIN address AS ad ON ad.address_id = cus.address_id";

    return $conexion->query($sql)->fetchAll();

}