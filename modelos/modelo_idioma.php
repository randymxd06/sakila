<?php

require_once "config/conexion.php";

function obtenerIdiomas($conexion){

    $sql = "SELECT language_id, name FROM language;";

    return $conexion->query($sql)->fetchAll();

}