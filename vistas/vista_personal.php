<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-5">

                <form action="" method="post" >

                    <label class="mt-3" for="nombre">Nombre:</label>
                    <input  type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe tu nombre">

                    <label class="mt-3" for="apellido">Apellido:</label>
                    <input  type="text" name="apellido" id="apellido" class="form-control" placeholder="Escribe tu apellido">

                    <label class="mt-3" for="direccion">Dirección:</label>
                    <select class="form-select" name="direccion" id="direccion">
                        <option value="">Selecciona una dirección</option>
                        <?php

                        foreach ($direcciones as $direccion)
                            echo "<option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                        ?>
                    </select>
                    <div class="form-file mt-4">
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
                        <option value="">Seleccione una tienda</option>

                        <?php
                        foreach ($tiendas as $tienda)
                            echo "<option value=\"{$tienda['store_id']}\">{$tienda['store_id']}</option>";
                        ?>
                    </select>

                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" name="activo" id="activo">
                        <label class="form-check-label" for="activo">
                            Activo
                        </label>
                    </div>

                    <label class="mt-3" for="nombreUsuario">Nombre de Usuario:</label>
                    <input  type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Escribe tu nombre de usuario">

                    <label class="mt-3" for="password">Contraseña:</label>
                    <input  type="password" name="password" id="password" class="form-control" placeholder="Escribe tu contraseña">


                    <button type="submit" name="btnGuardarPersonal" class="btn btn-secondary mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                </form>

                <?php

                if(isset($error)){
                    echo "<div class=\"alert alert-danger alert-dismissible fade show mt-3\" role=\"alert\">
                            {$error}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                }

                if(isset($personalInsertado)){
                    echo "<div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                            Los datos del personal se han insertado correctamente.
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                }

                ?>

            </div>

        </div>

    </div>

    <?php include_once "partes/parte_mensaje.php" ?>

<hr>

<div class="container">

    <?php if(empty($infoPersonales)) { ?>

        <?php include_once "partes/parte_info.php" ?>

    <?php } else { ?>

        <div class="row mt-3">

            <div class="col-md-12">

                <form action="" method="post">

                    <table class="table table-striped table-hover">

                        <thead>
                        <th scope="col">ID Personal</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tienda</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Nombre Usuario</th>
                        <th scope="col">Contraseña</th>

                        </thead>

                        <tbody>

                        <?php
                        foreach ($infoPersonales as $personal) {
                            echo "<tr>
                                   <th scope=\"row\">{$personal['staff_id']}</th>
                                   <td>{$personal['first_name']}</td>
                                   <td>{$personal['last_name']}</td>
                                   <td>{$personal['address']}</td>
                                   <td>{$personal['email']}</td>
                                   <td>{$personal['store_id']}</td>
                                   <td>{$personal['active']}</td>
                                   <td>{$personal['username']}</td>
                                   <td>{$personal['password']}</td>
                        </tr>";
                        }
                        ?>

                        </tbody>

                    </table>

                </form>

            </div>

        </div>

    <?php } ?>
</div>



<?php include_once "partes/parte_footer.php" ?>