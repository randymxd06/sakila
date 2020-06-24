<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="" method="get" >

                <label mt-3 for="direccion">Direccion:</label>
                <input  type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe tu dirección">

                <label class="mt-3" for="direccion2">Direccion 2:</label>
                <input type="text" name="direccion2" id="direccion2" class="form-control" placeholder="Escribe otra dirección">

                <label class="mt-3" for="distrito">Distrito:</label>
                <input type="text" name="distrito" id="distrito" class="form-control" placeholder="Escribe tu distrito">

                <label class="mt-3" for="ciudad">Ciudad:</label>
                <select class="form-select" name="ciudad" id="ciudad">
                    <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                </select>

                <label class="mt-3" for="codigoPostal">Código Postal:</label>
                <input type="text" name="codigoPostal" id="codigoPostal" class="form-control" placeholder="Escribe tu código postal">

                <label class="mt-3" for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Escribe tu teléfono">

                <label class="mt-3" for="ubicacion">Ubicación:</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="Escribe tu ubicación">


                <button type="submit" name="btnGuardarDireccion" class="btn btn-secondary mt-4">Guardar Datos</button>

            </form>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>