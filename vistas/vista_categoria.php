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

                    <input type="hidden" name="idCategoria" value="<?= $idCategoria ?>">

                    <label for="categoria">Nombre de la Categoría:</label>
                    <input  type="text" name="categoria" id="categoria"
                            class="form-control <?php echo isset($validaciones['errorCategoria']) ? 'is-invalid' : '' ?>" placeholder="Escribe el nombre de la categoría" value="<?= $categoria ?>">
                    <div class="invalid-feedback">
                        <?= $validaciones['errorCategoria'] ?? ""; ?>
                    </div>

                    <button type="submit" name="btnGuardarCategoria" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                </form>

                <?php include_once "partes/parte_mensaje.php" ?>

            </div>

            <hr>

            <?php if(empty($categorias)){ ?>

                <?php include_once "partes/parte_info.php" ?>

            <?php } else { ?>

            <div class="row">

                <div class="col-md-12">

                    <form action="" method="post">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de la Categoria</th>
                            <th scope="col">Accion</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($categorias as $categoria) {
                                echo "<tr>
                                          <th scope=\"row\">{$categoria['category_id']}</th>
                                          <td>{$categoria['name']}</td>
                                          <td>
                                              <button class='btn btn-outline-danger btn-sm' title='Eliminar categoria' name='eliminar' value='{$categoria['category_id']}'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>
                                              <button class='btn btn-outline-info btn-sm' title='Editar categoria' name='editar' value='{$categoria['category_id']}'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
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