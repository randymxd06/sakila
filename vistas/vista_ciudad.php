<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-5">

                <form action="" method="get" >

                    <label for="pais">Nombre del Ciudad:</label>
                    <input  type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Escribe el nombre de la ciudad">

                    <label class="mt-3" for="pais">País:</label>
                    <select class="form-select" name="pais" id="pais">
                        <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                    </select>


                    <button type="submit" name="btnGuardarCiudad" class="btn btn-secondary mt-4">Guardar Datos</button>

                </form>

            </div>

        </div>

    </div>

    <hr>

<?php include_once "partes/parte_footer.php" ?>