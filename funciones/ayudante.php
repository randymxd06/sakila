<?php

function incluirVista($nombre){
    include_once "vistas/vista_{$nombre}.php";
}

function imprimirArray($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}