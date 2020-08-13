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

                        <input type="hidden" name="idPais" value="<?= $idPais ?>">

                        <label for="pais">Nombre del País:</label>
                        <input  type="text" name="pais" id="pais"
                                class="form-control <?php echo isset($validaciones['errorPais']) ? 'is-invalid' : '' ?>" placeholder="Escribe el nombre del país" value="<?= $pais ?>">
                        <div class="invalid-feedback">
                            <?= $validaciones['errorPais'] ?? ""; ?>
                        </div>

                        <button type="submit" name="btnGuardarPais" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                    </form>

                    <?php include_once "partes/parte_mensaje.php" ?>

                </div>

                <hr>

                <?php if(empty($paises)){ ?>

                    <?php include_once "partes/parte_info.php" ?>

                <?php } else { ?>

                <div class="row">

                    <div class="col-md-12">

                        <form action="" method="post">

                            <table class="table table-striped table-hover">

                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre del Pais</th>
                                <th scope="col">Acciones</th>
                                </thead>

                                <tbody>

                                <?php
                                foreach ($paises as $pais) {
                                    echo "<tr>
                                             <th scope=\"row\">{$pais['country_id']}</th>
                                             <td>{$pais['country']}</td>
                                             <td>
                                              <button class='btn btn-outline-danger btn-sm' title='Eliminar país' name='eliminar' value='{$pais['country_id']}'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>
                                              <button class='btn btn-outline-info btn-sm' title='Editar país' name='editar' value='{$pais['country_id']}'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
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