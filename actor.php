<?php

session_start();

$nombrePagina = "actor";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

//Declarar variables//
$idActor = $_POST['idActor'] ?? "";
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

        if (empty($idActor)) {

            //Insertar los datos a la base de datos//
            $actorInsertado = insertarActores($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos del actor se han insertado correctamente.";

            //Lanzar un error si no se insertaron los datos correctamente//
            if (!$actorInsertado) {
                throw new Exception("Ocurrió un error al insertar los datos del autor");
            }

        } else {

            //Agregar el id al array datos//
            $datos['idActor'] = $idActor;

            //Actualizar datos//
            $actorEditado = editarActores($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if(!$actorEditado){
                throw new Exception("Ocurrió un error al editar los datos");
            }

        }

        //Redireccionar la pagina//
        redireccionar("actor.php");

    }//Fin del if//

    // Código para eliminar con el método POST //
    if(isset($_POST['eliminar'])){

        $idActor = $_POST['eliminar'] ?? "";

        //Validar//
        if(empty($idActor)){
            throw new Exception("El id del actor no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'idActor' => $idActor
        ];

        //Eliminar//
        $eliminando = eliminarActores($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error//
        if(!$eliminando){
            throw new Exception("Los datos no se eliminaron correctamente");
        }

        //Redireccionar la pagina//
        redireccionar("actor.php");

    }

    if(isset($_POST['editar'])){

        //Código para editar//
        $idActor = $_POST['editar'] ?? "";

        if(empty($idActor)){
            throw new Exception("El valor del id del actor está vacío");
        }

        $datos = [
            'idActor' => $idActor
        ];

        $resultado = obtenerActorPorId($conexion, $datos);

        $nombreActor = $resultado['first_name'];
        $apellidoActor = $resultado['last_name'];

    }

    // Código para eliminar con el método GET //
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