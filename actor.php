<?php

$nombrePagina = "actor";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

$actores = obtenerActores($conexion);

//Declarar variables//
$nombreActor = $_POST['inputNombreActor'] ?? "";
$apellidoActor = $_POST['inputApellidoActor'] ?? "";
$btnGuardadDatos = $_POST['btnGuardarDatos'] ?? "";

//Asegurarnos de que el usuario haya hecho click en el boton Guardar Datos//
if(isset($_POST['btnGuardarDatos'])){

    //Validar los datos//
    // TODO

    if(empty($nombreActor)){
        throw new Error("El nombre del actor esta vacio, porfavor llenarlo");
    }
    if(empty($apellidoActor)){
        throw new Error("El apellido del actor esta vacio, porfavor llenarlo");
    }
    
    $datos = [
        'inputNombreActor' => $nombreActor,
        'inputApellidoActor' => $apellidoActor
    ];

    //$datos = compact('nombreActor', 'apellidoActor');

    $insertando = insertarActores($conexion, $datos);

}//Fin del if//

//Incluir la vista//
include_once "vistas/vista_actor.php";