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

<nav class="navbar navbar-expand-lg bg-dark">

    <div class="container">

        <a class="navbar-brand blanco" style="font-size: 25px; text-decoration: none" href="index.php">Sakila's Movies</a>

        <button class="navbar-toggler blanco" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars" style="font-size: 30px;" aria-hidden="true"></i></span>
        </button>

        <div align="center" style="font-size: 18px" class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav" id="menu">
                <?php
                $url = $_SERVER['REQUEST_URI'];
                $paginaActual = "";
                foreach ($listado as $nombreArchivo => $pagina){
                    if(strpos($url, $nombreArchivo)){
                        $paginaActual = 'select';
                    }
                    else{
                        $paginaActual = 'blanco';
                    }
                    $icono = $pagina[1];
                    $textPagina = $pagina[0];
                    echo "<li class=\"\"><a class=\"nav-link {$paginaActual}\" href=\"{$nombreArchivo}.php\">
                    <i class=\"{$icono}\" aria-hidden=\"true\"></i> {$textPagina}
                    </a>
                    </li>";
                }
                ?>
            </ul>

        </div>

    </div>

</nav>
