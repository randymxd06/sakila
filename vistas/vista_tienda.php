<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<body>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-3">

        </div>

        <div class="col-md-5">

            <form action="" method="get" >

                <label class="mt-3" for="personal">Personal:</label>
                <select class="form-select" name="personal" id="personal">
                    <option value="">Selecciona un personal</option>
                    <?php

                    foreach ($personales as $personal)
                        echo "<option value=\"{$personal['staff_id']}\">{$personal['first_name, last_name']}</option>";
                    ?>
                </select>

                <label class="mt-3" for="direccion">Dirección:</label>
                <select class="form-select" name="direccion" id="direccion">
                    <option value="">Selecciona una dirección</option>
                    <?php

                    foreach ($direcciones as $direccion)
                        echo "<option value=\"{$direccion['address_id']}\">{$direccion['address']}</option>";
                    ?>
                </select>
                <button type="submit" name="btnGuardarTienda" class="btn btn-secondary mt-4">Guardar Datos</button>

            </form>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>