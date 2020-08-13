<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-5">

                <div class="row">

                    <form action="" method="post" >

                        <input type="hidden" name="idCiudad" value="<?= $idCiudad ?>">

                        <label for="pais">Nombre del Ciudad:</label>
                        <input  type="text" name="ciudad" id="ciudad"
                                class="form-control <?php echo isset($validaciones['errorCiudad']) ? 'is-invalid' : '' ?> " placeholder="Escribe el nombre de la ciudad" value="<?= $ciudad ?>">
                        <div class="invalid-feedback">
                            <?= $validaciones['errorCiudad'] ?? ""; ?>
                        </div>

                        <label class="mt-3" for="pais">País:</label>
                        <select class="form-select <?php echo isset($validaciones['errorPais']) ? 'is-invalid' : '' ?>" name="pais" id="pais" value="<?= $pais ?>">

                            <option value="">Selecciona un país</option>

                            <?php

                            foreach ($paises as $pais){

                                if($pais['country_id'] == $idPais){
                                    $seleccionado = "selected";
                                } else {
                                    $seleccionado = "";
                                }
                                echo "<option {$seleccionado} value=\"{$pais['country_id']}\">{$pais['country']}</option>";
                            }

                            ?>

                        </select>

                        <div class="invalid-feedback">
                            <?= $validaciones['errorPais'] ?? ""; ?>
                        </div>

                        <button type="submit" name="btnGuardarCiudad" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                    </form>

                    <?php include_once "partes/parte_mensaje.php"?>

                </div>

                <hr>

                <?php if(empty($ciudades)) { ?>

                    <?php include_once "partes/parte_info.php" ?>

                <?php } else { ?>

                <div class="row mt-3">

                    <div class="col-md-12">

                        <form action="" method="post">

                            <table class="table table-striped table-hover">

                                <thead>
                                <th scope="col">ID de la ciudad</th>
                                <th scope="col">Nombre de la ciudad</th>
                                <th scope="col">Nombre del pais</th>
                                <th scope="col">Acciones</th>
                                </thead>

                                <tbody>

                                <?php
                                foreach ($ciudades as $ciudad) {
                                    echo "<tr>
                                          <th scope=\"row\">{$ciudad['city_id']}</th>
                                          <td>{$ciudad['city']}</td>
                                          <td>{$ciudad['country']}</td>
                                          <td>
                                              <button class='btn btn-outline-danger btn-sm' title='Eliminar ciudad' name='eliminar' value='{$ciudad['city_id']}'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>
                                              <button class='btn btn-outline-info btn-sm' title='Editar ciudad' name='editar' value='{$ciudad['city_id']}'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
                                          </td>
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

        </div>

    </div>

    <hr>

<?php include_once "partes/parte_footer.php" ?>