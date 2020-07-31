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

                        <label for="pais">Nombre del Ciudad:</label>
                        <input  type="text" name="ciudad" id="ciudad" class="form-control" placeholder="Escribe el nombre de la ciudad">

                        <label class="mt-3" for="pais">País:</label>
                        <select class="form-select" name="pais" id="pais">
                            <option value="">Selecciona un país</option>
                            <?php

                            foreach ($paises as $pais)
                                echo "<option value=\"{$pais['country_id']}\">{$pais['country']}</option>"

                            ?>

                        </select>


                        <button type="submit" name="btnGuardarCiudad" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                    </form>

                    <?php

                    if(isset($error)){
                        echo "<div class=\"alert alert-danger alert-dismissible fade show mt-3\" role=\"alert\">
                            {$error}
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                    }

                    if(isset($ciudadInsertada)){
                        echo "<div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                            Los datos de la ciudad se han insertado correctamente.
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                    }

                    ?>

                </div>

                <hr>

                <div class="row mt-3">

                    <div class="col-md-12">

                        <table class="table table-striped table-hover">

                            <thead>
                            <th scope="col">ID de la ciudad</th>
                            <th scope="col">Nombre de la ciudad</th>
                            <th scope="col">Nombre del pais</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($ciudades as $ciudad){
                                echo "<tr>
                                <th scope=\"row\">{$ciudad['city_id']}</th>
                                <td>{$ciudad['city']}</td>
                                <td>{$ciudad['country']}</td>
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