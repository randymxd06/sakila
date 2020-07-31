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

                        <label for="pais">Nombre del País:</label>
                        <input  type="text" name="pais" id="pais" class="form-control" placeholder="Escribe el nombre del país">

                        <button type="submit" name="btnGuardarPais" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                    </form>
                </div>

                <hr>

                <div class="row">

                    <div class="col-md-12">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Pais</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($paises as $pais){
                                echo "<tr>
                                <th scope=\"row\">{$pais['country_id']}</th>
                                <td>{$pais['country']}</td>
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