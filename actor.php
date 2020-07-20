<?php

$nombrePagina = "actor";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

//Declarar variables//
$nombreActor = $_POST['inputNombreActor'] ?? "";
$apellidoActor = $_POST['inputApellidoActor'] ?? "";
$btnGuardadDatos = $_POST['btnGuardarDatos'] ?? "";


try {

    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Datos//
    if (isset($_POST['btnGuardarDatos'])) {

        //Valido que los campos no estén vacíos//
        if (empty($nombreActor)) {
            throw new Exception("El nombre del actor no puede estar vacío");
        }
        if (empty($apellidoActor)) {
            throw new Exception("El apellido del actor no puede estar vacío");
        }

        //Preparar array con los datos//
        $datos = [
            'inputNombreActor' => $nombreActor,
            'inputApellidoActor' => $apellidoActor
        ];

        //$datos = compact('nombreActor', 'apellidoActor');

        //Insertar los datos a la base de datos//
        $actorInsertado = insertarActores($conexion, $datos);

        //Lanzar un error si no se insertaron los datos correctamente//
        if(!$actorInsertado){
            throw new Exception("Ocurrió un error al insertar los datos del autor");
        }

        //Redireccionar la pagina//
        header("Location: actor.php", true, 303);


    }//Fin del if//

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Cargar los datos de los modelos//
$actores = obtenerActores($conexion);

//Incluir la vista//
include_once "vistas/vista_actor.php";