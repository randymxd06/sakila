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
    "personal" => ["Personal","fa fa-users"],
    "categoria" => ["Categoría", "fa fa-tags"],
    "tienda" => ["Tienda", "fa fa-shopping-cart"]
];

//echo "-----------------------------------------------";

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">

        <a class="navbar-brand" style="font-size: 25px" href="index.php">Sakila's Movies</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div align="center" style="font-size: 18px" class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <?php
                foreach ($listado as $nombreArchivo => $pagina){
                    $icono = $pagina[1];
                    $textPagina = $pagina[0];
                    echo "<li class=\"\"><a class=\"nav-link\" href=\"{$nombreArchivo}.php\">
                    <i class=\"{$icono}\" aria-hidden=\"true\"></i> {$textPagina}
                    </a>
                    </li>";
                }
                ?>
            </ul>

        </div>

    </div>

    </nav>
