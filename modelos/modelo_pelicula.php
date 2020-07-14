<?php

//Incluyo el archivo conexion//
require_once "config/conexion.php";

function obtenerPeliculas($conexion){

    $sql = "SELECT fi.film_id, fi.title, fi.description, fi.release_year, lan.name AS Idioma, lan2.name AS Idioma_Original, fi.rental_duration, fi.rental_rate, fi.length, fi.replacement_cost, fi.rating, fi.special_features 
            FROM film AS fi
            INNER JOIN language AS lan ON lan.language_id = fi.language_id
            LEFT JOIN language AS lan2 ON lan2.language_id = fi.original_language_id";

    return $conexion->query($sql)->fetchAll();

}