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

                <label mt-3 for="direccion">Direccion:</label>
                <input  type="text" name="direccion" id="direccion" class="form-control" placeholder="Escribe tu dirección">

                <label class="mt-3" for="direccion2">Direccion 2:</label>
                <input type="text" name="direccion2" id="direccion2" class="form-control" placeholder="Escribe otra dirección">

                <label class="mt-3" for="distrito">Distrito:</label>
                <input type="text" name="distrito" id="distrito" class="form-control" placeholder="Escribe tu distrito">

                <label class="mt-3" for="ciudad">Ciudad:</label>
                <select class="form-select" name="ciudad" id="ciudad">
                    <option value="">Seleccione una ciudad</option>
                    <?php

                    foreach ($ciudades as $ciudad)
                        echo "<option value=\"{$ciudad['city_id']}\">{$ciudad['city']}</option>";
                    
                    ?>
                </select>

                <label class="mt-3" for="codigoPostal">Código Postal:</label>
                <input type="text" name="codigoPostal" id="codigoPostal" class="form-control" placeholder="Escribe tu código postal">

                <label class="mt-3" for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Escribe tu teléfono">

                <button type="submit" name="btnGuardarDireccion" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

            </form>

            <hr>

            <?php if(empty($direcciones)) { ?>

                <?php include_once "partes/parte_info.php" ?>

            <?php } else { ?>

            <div class="row mt-3">

                <div class="col-md-12">

                    <table class="table table-striped table-hover">

                        <thead>
                        <th scope="col">ID de la Dirección</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Dirección 2</th>
                        <th scope="col">Distrito</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Código Postal</th>
                        <th scope="col">Teléfono</th>
                        </thead>

                        <tbody>

                        <?php
                        foreach ($direcciones as $direccion){
                            echo "<tr>
                                <th scope=\"row\">{$direccion['address_id']}</th>
                                <td>{$direccion['address']}</td>
                                <td>{$direccion['address2']}</td>
                                <td>{$direccion['district']}</td>
                                <td>{$direccion['city']}</td>
                                <td>{$direccion['postal_code']}</td>
                                <td>{$direccion['phone']}</td>
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