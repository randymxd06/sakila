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

                    <button type="submit" name="btnGuardarCliente" class="btn btn-secondary mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                </form>

                <hr>

                <?php if(empty($clientes)) { ?>

                    <?php include_once "partes/parte_info.php" ?>

                <?php } else { ?>

                <div class="row mt-3">

                    <div class="col-md-12">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID del Cliente</th>
                            <th scope="col">ID de la Tienda</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Activo</th>
                            <th scope="col">Fecha de Creación</th>
                            </thead>

                            <tbody>

                            <?php

                            foreach ($clientes as $cliente){

                                if($cliente['active'] == 'Si'){
                                    $icono = '<i class="fa fa-check text-success" aria-hidden="true"></i>';
                                }
                                else{
                                    $icono = '<i class=\'fa fa-times text-danger\'></i>';
                                }

                                echo "<tr>
                                <th scope=\"row\">{$cliente['customer_id']}</th>
                                <td>{$cliente['store_id']}</td>
                                <td>" . ucwords( strtolower($cliente['name']) ) . "</td>
                                <td>{$cliente['email']}</td>
                                <td>{$cliente['address']}</td>
                                <td>{$icono}</td>
                                <td>{$cliente['fecha']}</td>
                                
                            </tr>";
                            }
                            ?>

                            </tbody>

                        </table>

                    </div>

                </div>

                <?php } ?>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>