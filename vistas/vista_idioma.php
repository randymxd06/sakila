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

                        <input type="hidden" name="idPais" value="<?= $idIdioma ?>">

                        <label for="idioma">Nombre del Idioma:</label>
                        <input  type="text" name="idioma" id="idioma"
                                class="form-control <?php echo isset($validaciones['errorIdioma']) ? 'is-invalid' : '' ?>" placeholder="Escribe el nombre del idioma" value="<?= $idioma ?>">
                        <div class="invalid-feedback">
                            <?= $validaciones['errorIdioma'] ?? ""; ?>
                        </div>

                        <button type="submit" name="btnGuardarIdioma" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                    </form>

                    <?php include_once "partes/parte_mensaje.php" ?>

                </div>

                <hr>

                <?php if(empty($idiomas)){ ?>

                    <?php include_once "partes/parte_info.php" ?>

                <?php } else { ?>

                <div class="row mt-3">

                    <div class="col-md-12">

                        <form action="" method="post">

                            <table class="table table-striped table-hover">

                                <thead>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre del Idioma</th>
                                <th scope="col">Acciones</th>
                                </thead>

                                <tbody>

                                <?php
                                foreach ($idiomas as $idioma) {
                                    echo "<tr>
                                             <th scope=\"row\">{$idioma['language_id']}</th>
                                             <td>{$idioma['name']}</td>
                                             <td>
                                              <button class='btn btn-outline-danger btn-sm' title='Eliminar idioma' name='eliminar' value='{$idioma['language_id']}'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>
                                              <button class='btn btn-outline-info btn-sm' title='Editar idioma' name='editar' value='{$idioma['language_id']}'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
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