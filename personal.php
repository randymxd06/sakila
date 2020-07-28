<?php

$nombrePagina = "personal";

require_once "funciones/ayudante.php";

require_once "modelos/modelo_direccion.php";
$direcciones = obtenerDirecciones($conexion);
require_once "modelos/modelo_tienda.php";
$tiendas = obtenerTiendas($conexion);

//Declaro variables para obtener informacion//
$nombre = $_POST['nombre'] ?? "";
$apellido = $_POST['apellido'] ?? "";
$direccion = $_POST['direccion'] ?? "";
$foto = $_POST['foto'] ?? "";
$correo = $_POST['correo'] ?? "";
$tienda = $_POST['tienda'] ?? "";
$activo = $_POST['activo'] ?? "";
$nombreUsuario = $_POST['nombreUsuario'] ?? "";
$contraseña = $_POST['contraseña'] ?? "";

try {

    //Asegurarme que el usuario haya hecho click en el botón//
    if (isset($_POST['btnGuardarPersonal'])) {

        //Validar que los campos no esten vacíos//
        if(empty($nombre)){
            throw new Exception("El nombre no puede estar vacío");
        }
        if(empty($apellido)){
            throw new Exception("El apellido no puede estar vacío");
        }
        if(empty($direccion)){
            throw new Exception("Debe seleccionar una dirección");
        }
        if(empty($foto)){
            throw new Exception("Debe insertar una foto");
        }
        if(empty($correo)){
            throw new Exception("El correo no puede estar vacío");
        }
        if(empty($tienda)){
            throw new Exception("Debe seleccionar una tienda");
        }
        /*
         if(empty($activo)){
            throw new Exception("")
         }
         */
        if(empty($nombreUsuario)){
            throw new Exception("El nombre de usuario no puede estar vacío");
        }
        if(empty($contraseña)){
            throw new Exception("La contraseña no puede estar vacía");
        }

        //Preparar array con los datos//
        $datos = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'foto' => $foto,
            'correo' => $correo,
            'tienda' => $tienda,
            'activo' => $activo,
            'nombreUsuario' => $nombreUsuario,
            'contraseña' => $contraseña
        ];

        //Insertar los datos a la base de datos//
        $personalInsertado = insertarPersonal($conexion, $datos);

        //Lanzar un error si no se insertaron los datos correctamente//
        if(!$personalInsertado){
            throw new Exception("Ocurrió un error al insertar los datos del personal");
        }

        //Redireccionar la pagina//
        redireccionar("personal.php");

    }

} catch (Exception $e) {
    $error = $e->getMessage();
}

//Incluir la vista//
include_once "vistas/vista_personal.php";