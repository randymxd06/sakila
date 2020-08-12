<?php

//Nombre de mi página//
$nombrePagina = "ciudad";

//Incluyo el archivo ayudantes para usar unas funciones//
require_once "funciones/ayudante.php";

//Incluir los modelos//
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudad.php";

//Declaro dos variables para asignarles los datos de la base de datos//
$ciudades = obtenerCiudades($conexion);
$paises = obtenerPaises($conexion);

//Declaro variables para obtener los datos//
$ciudad = $_POST['ciudad'] ?? "";
$idPais = $_POST['pais'] ?? "";
$idCiudad = $_POST['idCiudad'] ?? "";

try {

    //Me aseguro que el usuario haya hecho click en el boton//
    if (isset($_POST['btnGuardarCiudad'])) {

        $validaciones = [];

        //Validar datos//
        if (empty($ciudad)) {
            $validaciones['errorCiudad'] = ("El nombre de la ciudad no puede estar vacío");
        }
        if (empty($idPais)) {
            $validaciones['errorPais'] = ("Debe seleccionar un país");
        }
        if(!empty($validaciones)){
            throw new Exception("Verifique que los campos no estén vacíos");
        }

        //Preparar el array con los datos//
        $datos = [
            'ciudad' => $ciudad,
            'pais' => $idPais
        ];

        if (empty($idCiudad)) {

            //Insertar datos//
            $ciudadInsertada = insertarCiudades($conexion, $datos);
            $_SESSION['mensaje'] = "La ciudad se ha insertado correctamente";

            //Lanzar error si no se ha insertado los datos//
            if (!$ciudadInsertada) {
                throw new Exception("Ha ocurrido un error al insertar los datos de la ciudad");
            }

        } else {

            //Agregar el id al array datos//
            $datos['idCiudad'] = $idCiudad;

            //Actualizar datos//
            $ciudadEditada = editarCiudad($conexion, $datos);
            $_SESSION['mensaje'] = "Los datos fueron editados correctamente";

            if(!$ciudadEditada){
                throw new Exception("Ocurrió un error al editar los datos");
            }

        }

        //Redireccionar la pagina//
        redireccionar("ciudad.php");

    }

    // Código para eliminar con el método POST //
    if(isset($_POST['eliminar'])){

        $idCiudad = $_POST['eliminar'] ?? "";

        //Validar que el id de la ciudad no este vacío//
        if(empty($idCiudad)){
            throw new Exception("El id de la ciudad no puede estar vacío");
        }

        //Preparar array//
        $datos = [
            'idCiudad' => $idCiudad
        ];

        //Eliminar la ciudad//
        $eliminando = eliminarCiudades($conexion, $datos);
        $_SESSION['mensaje'] = "Los datos fueron eliminados correctamente";

        //Lanzar error//
        if(!$eliminando){
            throw new Exception("Los datos no se eliminaron correctamente");
        }

        //Redireccionar la pagina//
        redireccionar("ciudad.php");

    }

    //Código para editar//
    if(isset($_POST['editar'])){

        $idCiudad = $_POST['editar'] ?? "";

        //Validar que no este vacío//
        if(empty($idCiudad)){
            throw new Exception("El valor del id de la ciudad está vacío");
        }

        $datos = [
            'idCiudad' => $idCiudad
        ];

        $resultado = obtenerCiudadPorId($conexion, $datos);

        $ciudad = $resultado['city'];
        $pais = $resultado['country_id'];

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_ciudad.php";