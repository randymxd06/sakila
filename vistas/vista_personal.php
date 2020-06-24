<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-5">

                <form action="" method="get" >

                    <label class="mt-3" for="nombre">Nombre:</label>
                    <input  type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre">

                    <label class="mt-3" for="apellido">Apellido:</label>
                    <input  type="text" name="apellido" id="apellido" class="form-control" placeholder="Escribe tu apellido">

                    <label class="mt-3" for="direccion">Dirección:</label>
                    <input  type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe tu direccion">

                    <div class="form-file mt-3">
                        <input type="file" class="form-file-input" id="foto" name="foto">
                        <label class="form-file-label" for="foto">
                            <span class="form-file-text">Selecciona una foto...</span>
                            <span class="form-file-button">Buscar</span>
                        </label>
                    </div>

                    <label class="mt-3" for="correo">Correo:</label>
                    <input  type="email" name="correo" id="correo" class="form-control" placeholder="Escribe tu correo">

                    <label class="mt-3" for="tienda">Tienda:</label>
                    <select class="form-select" name="tienda" id="tienda">
                        <option value="">Aqui va el listado de la ciudad desde MySQL</option>
                    </select>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="activo" id="activo">
                        <label class="form-check-label" for="activo">
                            Activo
                        </label>
                    </div>

                    <label class="mt-3" for="nombreUsuario">Nombre de Usuario:</label>
                    <input  type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Escribe tu nombre de usuario">

                    <label class="mt-3" for="contraseña">Contraseña:</label>
                    <input  type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Escribe tu contraseña">


                    <button type="submit" name="btnGuardarPersonal" class="btn btn-secondary mt-3">Guardar Datos</button>

                </form>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>