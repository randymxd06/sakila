<?php

//Valores de mi base de datos de 000webhost//
if($_SERVER['SERVER_NAME'] == 'sakila0624.000webhostapp.com') {
    $host = "localhost";
    $dbname = "id14138384_sakila";
    $usuario = "id14138384_root";
    $password = "j3NVvSi{6U6\mFqA";
}

//Valores de mi base de datos local (mi pc)//
$host = "localhost";
$dbname = "sakila";
$usuario = "root";
$password = "rayquaza51";

$ajustes = [
    19 => 2, //Devuelve un array con los nombres de las columnas de los resultados de la BD.//
    3 => 2 //Nos genera excepciones cuando hay errores en los queries//
];

$errores = [];

try{
    $conexion = new PDO("mysql:host={$host}; dbname={$dbname}", $usuario, $password);
}catch(PDOException $exception){
    throw new Exception("Hubo un error al conectarnos a la base de datos: {$exception->getMessage()}");
    //array_push($errores, $exception -> getMessage());
}


