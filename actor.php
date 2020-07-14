<?php

$nombrePagina = "actor";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

$actores = obtenerActores($conexion);

//Declarar variables//
$nombreActor = $_GET['inputNombreActor'] ?? "";
$apellidoActor = $_GET['inputApellidoActor'] ?? "";
$btnGuardadDatos = $_GET['btnGuardarDatos'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Datos//
if(isset($_GET['btnGuardarDatos'])){
    //Codigo para guardar en la base de datos//
    echo "Se van a guardar los datos...";

    //Validar los datos//
    // TODO

    /*$datos = [
      'inputNombreActor' => $nombreActor,
      'inputApellidoActor' => $apellidoActor
    ];*/

    $datos = compact('nombreActor', 'apellidoActor');

    $insertando = insertarActores($conexion, $datos);

    if($insertando)
        echo "Datos insertados correctamente";
    else
        echo "No se pudo insertar los datos";

}

//Incluir la vista//
include_once "vistas/vista_actor.php";