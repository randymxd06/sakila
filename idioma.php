<?php

$nombrePagina = "idioma";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_idioma.php";
$idiomas = obtenerIdiomas($conexion);

//Declarar variables//
$idioma = $_POST['idioma'] ?? "";
$idIdioma = $_POST['idIdioma'] ?? "";

try {

    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Idioma//
    if (isset($_POST['btnGuardarIdioma'])) {

        //Declaro array validaciones//
        $validaciones = [];

        //Valido que los campos no estén vacíos//
        if(empty($idiomas)){
            $validaciones['errorIdioma'] = ("El idioma no puede estar vacío");
        }
        if(!empty($validaciones)){
            throw new Exception("Verifique que los campos no estén vacíos");
        }

        //Preparar array con los datos//
        $datos = [
            'idioma' => $idioma
        ];

        if(empty($idIdioma)){

            //Insertar los datos a la base de datos//
            $idiomaInsertado = insertarIdiomas($conexion, $datos);
            $_SESSION['mensaje'] = "El idioma fue insertado correctamente";

            //Lanzar un error si no se insertaron los datos correctamente//
            if(!$idiomaInsertado){
                throw new Exception("Ocurrió un error al insertar el idioma");
            }

        } else {

            //Agregar el id al array datos//
            $datos['idIdioma'] = $idIdioma;

            //Actualizar datos//
            $idiomaEditado = editarIdiomas($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if(!$idiomaEditado){
                throw new Exception("Ha ocurrido un error al editar los datos");
            }

        }

        //Redireccionar la pagina//
        redireccionar("idioma.php");

    }

    // Código para eliminar con el método POST //
    if(isset($_POST['eliminar'])){

        $idIdioma = $_POST['eliminar'] ?? "";

        //Validar que el id del país no este vacío//
        if(empty($idIdioma)){
            throw new Exception("El id del idioma no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'idIdioma' => $idIdioma
        ];

        //Eliminar el idioma//
        $eliminando = eliminarIdiomas($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos se eliminaron correctamente";

        //Lanzar error//
        if (!$eliminando) {
            throw new Exception("Los datos no se pudieron eliminar");
        }

        //Redireccionar la pagina//
        redireccionar("idioma.php");

    }

    //Código para editar//
    if(isset($_POST['editar'])){

        $idIdioma = $_POST['editar'] ?? "";

        //Validar que no este vacío//
        if(empty($idIdioma)){
            throw new Exception("El valor del id del idioma está vacío");
        }

        //Preparar el array con los datos//
        $datos = [
            'idIdioma' => $idIdioma
        ];

        $resultado = obtenerIdiomaPorId($conexion, $datos);

        $idioma = $resultado['name'];

    }


} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_idioma.php";