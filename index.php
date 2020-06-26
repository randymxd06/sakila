<?php

require_once "funciones/ayudante.php";

$nombrePagina = "principal";

//Incluir los modelos//
require_once "modelos/modelo_actor.php";

//$actores = obtenerActores($conexion);

//Incluir la vista//
include_once "vistas/vista_principal.php";