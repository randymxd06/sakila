<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="" method="get" >

                <label for="inputNombreActor">Nombre del Actor: </label>
                <input  type="text" name="inputNombreActor" id="inputNombreActor" class="form-control" placeholder="Escribe el nombre del actor">

                <label class="mt-3" for="inputApellidoActor">Apellido del Actor: </label>
                <input type="text" name="inputApellidoActor" id="inputApellidoActor" class="form-control" placeholder="Escribe el apellido del actor">

                <button type="submit" name="btnGuardarDatos" class="btn btn-secondary mt-3">Guardar Datos</button>

            </form>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>