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

                <form action="" method="post">

                    <input type="hidden" name="idActor" value="<?= $idActor ?>">

                    <label for="inputNombreActor">Nombre del Actor: </label>
                    <input  type="text" name="inputNombreActor" id="inputNombreActor"
                            class="form-control <?php echo isset($validaciones['errorNombre']) ? 'is-invalid' : '' ?>" placeholder="Escribe el nombre del actor" value="<?= $nombreActor ?>">
                    <div class="invalid-feedback">
                        <?= $validaciones['errorNombre'] ?? ""; ?>
                    </div>


                    <label class="mt-3" for="inputApellidoActor">Apellido del Actor: </label>
                    <input type="text" name="inputApellidoActor" id="inputApellidoActor"
                           class="form-control <?php echo isset($validaciones['errorApellido']) ? 'is-invalid' : '' ?>" placeholder="Escribe el apellido del actor" value="<?= $apellidoActor ?>">
                    <div class="invalid-feedback">
                        <?= $validaciones['errorApellido'] ?? ""; ?>
                    </div>


                    <div class="mt-3">
                        <button type="submit" name="btnGuardarDatos" class="btn btn-secondary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>
                    </div>

                </form>

                <?php include_once "partes/parte_mensaje.php" ?>

            </div>

            <hr>

            <?php if(empty($actores)) { ?>

            <?php include_once "partes/parte_info.php" ?>

            <?php } else { ?>

            <div class="row mt-3">

                <div class="col-md-12">

                    <form action="" method="post">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Acciones</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($actores as $actor) {
                                echo "<tr>
                                         <th scope=\"row\">{$actor['actor_id']}</th>
                                         <td>{$actor['first_name']}</td>
                                         <td>{$actor['last_name']}</td>
                                         <td>
                                         <button class='btn btn-outline-danger btn-sm' title='Eliminar actor' name='eliminar' value='{$actor['actor_id']}'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>
                                         <button class='btn btn-outline-info btn-sm' title='Editar actor' name='editar' value='{$actor['actor_id']}'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
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