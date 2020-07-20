<?php

$nombrePagina = "idioma";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_idioma.php";
$idiomas = obtenerIdiomas($conexion);

//Declarar variables//
$idioma = $_POST['idioma'] ?? "";

try {

    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Idioma//
    if (isset($_POST['btnGuardarIdioma'])) {

        //Valido que los campos no estén vacíos//
        if(empty($idiomas)){
            throw new Exception("El idioma no puede estar vacío");
        }

        //Preparar array con los datos//
        $datos = [
            'idioma' => $idioma
        ];

        //Insertar los datos a la base de datos//
        $idiomaInsertado = insertarIdiomas($conexion, $datos);

        //Lanzar un error si no se insertaron los datos correctamente//
        if(!$idiomaInsertado){
            throw new Exception("Ocurrió un error al insertar el idioma");
        }

        //Redireccionar la pagina//
        header("Location: idioma.php", true, 303);

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_idioma.php";