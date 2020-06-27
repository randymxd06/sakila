<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-5">

                <form action="" method="get" >

                    <label class="mt-3" for="idioma">Nombre del Idioma:</label>

                    <select class="form-select" name="idioma" id="idioma">
                        <option value="">Selecciona un idioma</option>
                        <?php

                        foreach ($idiomas as $idioma)
                            echo "<option value=\"{$idioma['language_id']}\">{$idioma['name']}</option>";

                        ?>
                    </select>

                    <button type="submit" name="btnGuardarIdioma" class="btn btn-secondary mt-4">Guardar Datos</button>

                </form>

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>