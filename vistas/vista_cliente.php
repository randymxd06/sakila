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

                    <label class="mt-3" for="tienda">Tienda:</label>
                    <select class="form-select" name="tienda" id="tienda">
                        <option value="">Seleccione una tienda</option>

                        <?php
                        foreach ($tiendas as $tienda)
                            echo "<option value=\"{$tienda['store_id']}\">{$tienda['store_id']}</option>";
                        ?>

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

                <hr>

                <div class="row mt-3">

                    <div class="col-md-12">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID del Cliente</th>
                            <th scope="col">ID de la Tienda</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($clientes as $cliente){
                                echo "<tr>
                                <th scope=\"row\">{$cliente['customer_id']}</th>
                                <td>{$cliente['store_id']}</td>
                                <td>{$cliente['first_name']}</td>
                                <td>{$cliente['last_name']}</td>
                                <td>{$cliente['email']}</td>
                                <td>{$cliente['address']}</td>
                            </tr>";
                            }
                            ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>