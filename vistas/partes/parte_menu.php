<?php
$listado = [
    "index" => ["Inicio", "fa fa-home"],
    "actor" => ["Actor","fa fa-user"],
    "direccion" => ["Dirección","fa fa-map-marker"],
    "ciudad" => ["Ciudad","fa fa-location-arrow"],
    "pais" => ["País","fa fa-globe"],
    "cliente" => ["Cliente","fa fa-user-circle"],
    "pelicula" => ["Película","fa fa-film"],
    "idioma" => ["Idioma","fa fa-language"],
    "personal" => ["Personal","fa fa-users"]
];

//echo "-----------------------------------------------";

?>

<nav class="navbar navbar-expand-lg navbar-light container">

    <div class="container-fluid">

        <a class=" mr-5" style="font-size: 25px; text-decoration: none; color: gray";  href="index.php">Sakila's Movies</a>

        <div align="center" class="container">

            <ul class="navbar-nav" style="font-size: 18px">
                <?php
                foreach ($listado as $nombreArchivo => $pagina){
                    $icono = $pagina[1];
                    $textPagina = $pagina[0];
                    echo "<li class=\" mr-5 \"><a class=\"nav-link col-sm-12\" href=\"{$nombreArchivo}.php\">
                    <i class=\"{$icono}\" aria-hidden=\"true\"></i>{$textPagina}
                    </a>
                    </li>";
                }
                ?>
            </ul>

        </div>

    </div>

</nav>