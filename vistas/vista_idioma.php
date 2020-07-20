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

                        <label for="idioma">Nombre del Idioma:</label>
                        <input  type="text" name="idioma" id="idioma" class="form-control" placeholder="Escribe el nombre del idioma">

                        <button type="submit" name="btnGuardarIdioma" class="btn btn-secondary mt-4">Guardar Datos</button>

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

                    if(isset($idiomaInsertado)){
                        echo "<div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                            El idioma se ha insertado correctamente.
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
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Idioma</th>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($idiomas as $idioma){
                                echo "<tr>
                                <th scope=\"row\">{$idioma['language_id']}</th>
                                <td>{$idioma['name']}</td>
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