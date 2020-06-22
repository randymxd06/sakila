<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light container">

    <div class="container-fluid">

        <a class=" mr-4" style="font-size: 25px; text-decoration: none; color: gray";  href="index.php">Sakila's Movies</a>

        <div align="center" class="container">

            <ul class="navbar-nav" style="font-size: 18px">
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                </li>
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="actor.php"><i class="fa fa-user" aria-hidden="true"></i> Actor</a>
                </li>
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="direccion.php"><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección</a>
                </li>
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="ciudad.php"><i class="fa fa-location-arrow" aria-hidden="true"></i> Ciudad</a>
                </li>
                <li class="mr-3">
                    <a class="nav-link col-sm-12" href="pais.php"><i class="fa fa-globe" aria-hidden="true"></i> País</a>
                </li>
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="cliente.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Cliente</a>
                </li>
                <li class="mr-3">
                    <a class="nav-link col-sm-12" href="pelicula.php"><i class="fa fa-film" aria-hidden="true"></i> Película</a>
                </li>
                <li class=" mr-3">
                    <a class="nav-link col-sm-12" href="idioma.php"><i class="fa fa-language" aria-hidden="true"></i> Idioma</a>
                </li>
                <li class="">
                    <a class="nav-link col-sm-12" href="personal.php"><i class="fa fa-users" aria-hidden="true"></i> Personal</a>
                </li>
            </ul>
        </div>

    </div>

</nav>

<div class="row">
    <div align="center" class="col-sm-12">
        <h1 class="mt-5">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>
    </div>
    <div align="center" class="col-sm-12">
        <img width="100%" height="100%" src="https://filasiete.com/wp-content/uploads/2017/01/sala_cine1.jpg" alt="image">
    </div>
</div>

</body>
</html>