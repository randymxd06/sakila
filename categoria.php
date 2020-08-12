<?php

require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$categorias = obtenerCategorias($conexion);

$nombrePagina = "categoría";

$categoria = $_POST['categoria'] ?? "";
$idCategoria = $_POST['idCategoria'] ?? "";

try {

    //Asegurarnos de que el usuario haya hecho click en el boton Guardar Categoría//
    if (isset($_POST['btnGuardarCategoria'])) {

        //Declaro array validaciones//
        $validaciones = [];

        //Valido que los campos no estén vacíos//
        if(empty($categoria)){
            $validaciones['errorCategoria'] = ("La categoría no puede estar vacía");
        }
        if(!empty($validaciones)){
            throw new Exception("Verifique que los campos no estén vacíos");
        }

        //Preparar array con los datos//
        $datos = [
            'categoria' => $categoria
        ];

        if (empty($idCategoria)) {

            //Insertar los datos a la base de datos//
            $categoriaInsertada = insertarCategorias($conexion, $datos);
            $_SESSION['mensaje'] = "La categoria fue insertada correctamente";

            //Lanzar un error si no se insertaron los datos correctamente//
            if (!$categoriaInsertada) {
                throw new Exception("Ocurrió un error al insertar la categoría");
            }

        } else {

            //Agregar el id al array datos//
            $datos['idCategoria'] = $idCategoria;

            //Actualizar datos//
            $categoriaEditada = editarCategorias($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if(!$categoriaEditada){
                throw new Exception("Ha ocurrido un error al editar los datos");
            }

        }

        //Redireccionar la pagina//
        redireccionar("categoria.php");

    }

    // Código para eliminar con el método POST //
    if(isset($_POST['eliminar'])){

        $idCategoria = $_POST['eliminar'] ?? "";

        //Validar que el id de la categoria no este vacío//
        if(empty($idCategoria)){
            throw new Exception("El id de la categoria no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'idCategoria' => $idCategoria
        ];

        //Eliminar la categoria//
        $eliminando = eliminarCategorias($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos se eliminaron correctamente";

        //Lanzar error//
        if (!$eliminando) {
            throw new Exception("Los datos no se pudieron eliminar");
        }

        //Redireccionar la pagina//
        redireccionar("categoria.php");

    }

    //Código para editar//
    if(isset($_POST['editar'])){

        $idCategoria = $_POST['editar'] ?? "";

        //Validar que no este vacío//
        if(empty($idCategoria)){
            throw new Exception("El valor del id de la categoria está vacío");
        }

        //Preparar el array con los datos//
        $datos = [
            'idCategoria' => $idCategoria
        ];

        $resultado = obtenerCategoriaPorId($conexion, $datos);

        $categoria = $resultado['name'];
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir vista//
include_once "vistas/vista_categoria.php";