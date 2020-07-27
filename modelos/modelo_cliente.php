<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerClientes($conexion){

    /*
    $sql = "SELECT cus.customer_id, sto.store_id, cus.first_name, cus.last_name, cus.email, ad.address
    FROM customer AS cus
    INNER JOIN store AS sto ON sto.store_id = cus.store_id
    INNER JOIN address AS ad ON ad.address_id = cus.address_id";
    */

    $sql = "SELECT c.customer_id,
                c.store_id,
                c.first_name,
                c.last_name,
                CONCAT(c.first_name, ' ', c.last_name) AS name,
                LOWER(c.email) AS email,
                c.address_id,
                c.create_date,
                DATE_FORMAT(c.create_date, '%d/%m/%Y %l:%i %p') AS fecha,
                a.address,
                /*CASE c.active WHEN 1 THEN 'Si' ELSE 'No' END AS active*/
                IF(c.active = 1, 'Si', 'No') AS active
            FROM customer AS c
            LEFT JOIN store AS s ON c.store_id = s.store_id
            LEFT JOIN address AS a ON c.address_id = a.address_id
            ORDER BY c.first_name ASC;";

    return $conexion->query($sql)->fetchAll();

}