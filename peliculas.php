<?php
//Declarar variables//
$pagina = "Peliculas/Movies";

//Concatenar en PHP//
echo "Estas en la pagina de " . $pagina . " ";

//Template string en PHP//
echo "Soy un nuevo texto {$pagina} ";

//Objetos
$objeto = new stdClass();
$objeto -> nombre = "Randy";
$objeto -> edad = 19;
echo "Hola, mi nombre es {$objeto->nombre} tengo {$objeto -> edad} años de edad";



?>