<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-5">

                <form action="" method="get" >

                    <label class="mt-3" for="tienda">Tienda:</label>
                    <select class="form-select" name="tienda" id="tienda">
                        <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                    </select>

                    <label class="mt-3" for="primerNombre">Primer Nombre:</label>
                    <input  type="text" name="primerNombre" id="primerNombre" class="form-control" placeholder="Escribe tu primer nombre">

                    <label class="mt-3" for="apellido">Apellido:</label>
                    <input  type="text" name="apellido" id="apellido" class="form-control" placeholder="Escribe tu apellido">


                    <label class="mt-3" for="correo">Correo:</label>
                    <input  type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo">

                    <label class="mt-3" for="direccion">Dirección:</label>
                    <input  type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe tu dirección">

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="activo" id="activo">
                        <label class="form-check-label" for="activo">
                            Activo
                        </label>
                    </div>

                    <button type="submit" name="btnGuardarCliente" class="btn btn-secondary mt-3">Guardar Datos</button>

                </form>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>