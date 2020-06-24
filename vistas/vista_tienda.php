<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<body>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="" method="get" >

                <label class="mt-3" for="personal">Personal:</label>
                <select class="form-select" name="personal" id="personal">
                    <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                </select>

                <label class="mt-3" for="direccion">Direccion:</label>
                <input  type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe tu dirección">

                <button type="submit" name="btnGuardarTienda" class="btn btn-secondary mt-4">Guardar Datos</button>

            </form>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>