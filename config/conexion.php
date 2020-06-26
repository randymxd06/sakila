<?php

$usuario = "root";
$password = "rayquaza51";

$errores = [];

try{
    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $password);
}catch(PDOException $exception){
    array_push($errores, $exception -> getMessage());
}


