<?php

$nombrePagina = "país";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
$paises = obtenerPaises($conexion);

$pais = $_POST['pais'] ?? "";
$idPais = $_POST['idPais'] ?? "";

try {

    if (isset($_POST['btnGuardarPais'])) {

        //Declaro array validaciones//
        $validaciones = [];

        //Validar datos//
        if (empty($pais)) {
            $validaciones['errorPais'] = ("El nombre del país no puede estar vacío");
        }
        if(!empty($validaciones)){
            throw new Exception("Verifique que los campos no estén vacíos");
        }

        //Preparar el array con los datos//
        $datos = [
            'pais' => $pais
        ];

        if (empty($idPais)) {

            //Insertar datos//
            $paisInsertado = insertarPaises($conexion, $datos);
            $_SESSION['mensaje'] = "El país fue insertado correctamente";

            //Lanzar error si no se ha insertado los datos//
            if (!$paisInsertado) {
                throw new Exception("Ha ocurrido un error al insertar los datos de la ciudad");
            }

        } else {

            //Agregar el id al array datos//
            $datos['idPais'] = $idPais;

            //Actualizar datos//
            $paisEditado = editarPaises($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if (!$paisEditado) {
                throw new Exception("Ha ocurrido un error al editar los datos");
            }

        }

        //Redireccionar la pagina//
        redireccionar("pais.php");

    }

    // Código para eliminar con el método POST //
    if (isset($_POST['eliminar'])) {

        $idPais = $_POST['eliminar'] ?? "";

        //Validar que el id del país no este vacío//
        if (empty($idPais)) {
            throw new Exception("El id del país no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'idPais' => $idPais
        ];

        //Eliminar el país//
        $eliminando = eliminarPaises($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos se eliminaron correctamente";

        //Lanzar error//
        if (!$eliminando) {
            throw new Exception("Los datos no se pudieron eliminar");
        }

        //Redireccionar la pagina//
        redireccionar("pais.php");

    }

    //Código para editar//
    if (isset($_POST['editar'])) {

        $idPais = $_POST['editar'] ?? "";

        //Validar que no este vacío//
        if (empty($idPais)) {
            throw new Exception("El valor del id del país está vacío");
        }

        $datos = [
            'idPais' => $idPais
        ];

        $resultado = obtenerPaisPorId($conexion, $datos);

        $pais = $resultado['country'];

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_pais.php";