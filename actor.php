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

        $validaciones = [];

        //Valido que los campos no estén vacíos//
        if (empty($nombreActor)) {
            $validaciones['errorNombre'] = ("El nombre del actor no puede estar vacío");
        }
        if (empty($apellidoActor)) {
            $validaciones['errorApellido'] = ("El apellido del actor no puede estar vacío");
        }
        if(!empty($validaciones)){
            throw new Exception("Verifique que los campos no estén vacíos");
        }

        //Preparar array con los datos//
        $datos = [
            'inputNombreActor' => $nombreActor,
            'inputApellidoActor' => $apellidoActor
        ];

        //$datos = compact('nombreActor', 'apellidoActor');

        //Insertar los datos a la base de datos//
        $actorInsertado = insertarActores($conexion, $datos);
        $mensaje = "Los datos del actor se han insertado correctamente.";

        //Lanzar un error si no se insertaron los datos correctamente//
        if(!$actorInsertado){
            throw new Exception("Ocurrió un error al insertar los datos del autor");
        }

        //Redireccionar la pagina//
        redireccionar("actor.php");


    }//Fin del if//

    //Comentar
    if(isset($_POST['eliminar'])){ //Metodo post//

        $id = $_POST['eliminar'] ?? "";

        //Validar//
        if(empty($id)){
            throw new Exception("El id del actor no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'id' => $id
        ];

        //Eliminar//
        $eliminando = eliminarActores($conexion, $datos);
        $mensaje = "Los datos fueron eliminados correctamente";

        //Lanzar error//
        if(!$eliminando){
            throw new Exception("Los datos no se eliminaron correctamente");
        }

        //Redireccionar la pagina//
        redireccionar("actor.php");

    }

    // Código para eliminar //
    /*if(isset($_GET['accion'])){ //Metodo GET//

        //Codigo para eliminar//
        if(($_GET['accion'] == 'eliminar')){

            $id = $_GET['id'] ?? "";

            //Validar los datos//
            if(empty($id)){
                throw new Exception("El valor del id esta vacío");
            }

            //Preparar el array con los datos//
            $datos = [
                'id' => $id
            ];

            //Eliminar los datos//
            $eliminando = eliminarActores($conexion, $datos);
            $mensaje = "Datos eliminados correctamente";

            //Lanzar un error si no se eliminaron los datos//
            if(!$eliminando){
                throw new Exception("No se pudo eliminar los datos");
            }

            //Redireccionar la pagina//
            redireccionar("actor.php");



        }



    }*/



} catch (Exception $e) {
    $error = $e->getMessage();
}

//Cargar los datos de los modelos//
$actores = obtenerActores($conexion);

//Incluir la vista//
include_once "vistas/vista_actor.php";