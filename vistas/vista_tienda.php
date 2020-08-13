<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<body>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-3">

        </div>

        <div class="col-md-5">

            <div class="row">

                <form action="" method="post" >

                    <label class="mt-3" for="personal">Personal:</label>
                    <select class="form-select" name="personal" id="personal">
                        <option value="">Selecciona un personal</option>
                        <?php

                        foreach ($personales as $personal)
                            echo "<option value=\"{$personal['staff_id']}\">{$personal['first_name, last_name']}</option>";
                        ?>
                    </select>

                    <label class="mt-3" for="direccion">Dirección:</label>
                    <select class="form-select" name="direccion" id="direccion">
                        <option value="">Selecciona una dirección</option>
                        <?php

                        foreach ($direcciones as $direccion)
                            echo "<option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                        ?>
                    </select>
                    <button type="submit" name="btnGuardarTienda" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                </form>

            </div>

            <hr>


            <?php if(empty($informacionTiendas)) { ?>

                <?php include_once "partes/parte_info.php" ?>

            <?php } else { ?>

            <div class="row">

                <div class="col-md-12">

                    <table class="table">

                        <thead>
                            <th>ID de la tienda</th>
                            <th>Gerente de la tienda</th>
                            <th>Direccion de la tienda</th>
                        </thead>

                        <tbody>

                            <?php

                            foreach ($informacionTiendas as $infotienda){

                                echo "<tr>
                                            <td>{$infotienda['store_id']}</td>
                                            <td>{$infotienda['first_name']}</td>
                                            <td>{$infotienda['address']}</td>
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