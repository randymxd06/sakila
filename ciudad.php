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
$pais = $_POST['pais'] ?? "";

try {

    //Me aseguro que el usuario haya hecho click en el boton//
    if (isset($_POST['btnGuardarCiudad'])) {

        //Validar datos//
        if (empty($ciudad)) {
            throw new Exception("El nombre de la ciudad no puede estar vacío");
        }
        if (empty($pais)) {
            throw new Exception("Debe seleccionar un país");
        }

        //Preparar el array con los datos//
        $datos = [
            'ciudad' => $ciudad,
            'pais' => $pais
        ];

        //Insertar datos//
        $ciudadInsertada = insertarCiudades($conexion, $datos);

        //Lanzar error si no se ha insertado los datos//
        if(!$ciudadInsertada){
            throw new Exception("Ha ocurrido un error al insertar los datos de la ciudad");
        }

        //Redireccionar la pagina//
        header("Location: ciudad.php", true, 303);

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_ciudad.php";