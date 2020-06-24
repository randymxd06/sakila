<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-5">

                <form action="" method="get" >

                    <label for="pais">Nombre del País:</label>
                    <input  type="text" name="pais" id="pais" class="form-control" placeholder="Escribe el nombre del país">

                    <button type="submit" name="btnGuardarPais" class="btn btn-secondary mt-4">Guardar Datos</button>

                </form>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>