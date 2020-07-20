<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$categorias = obtenerCategorias($conexion);

$nombrePagina = "categoría";

$categoria = $_POST['categoria'] ?? "";


try {

    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Categoría//
    if (isset($_POST['btnGuardarCategoria'])) {

        //Valido que los campos no estén vacíos//
        if(empty($categoria)){
            throw new Exception("La categoría no puede estar vacía");
        }

        //Preparar array con los datos//
        $datos = [
            'categoria' => $categoria
        ];

        //Insertar los datos a la base de datos//
        $categoriaInsertada = insertarCategorias($conexion, $datos);

        //Lanzar un error si no se insertaron los datos correctamente//
        if(!$categoriaInsertada){
            throw new Exception("Ocurrió un error al insertar la categoría");
        }

        //Redireccionar la pagina//
        header("Location: categoria.php", true, 303);

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir vista//
include_once "vistas/vista_categoria.php";