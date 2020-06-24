<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="" method="get" >

                <label for="inputNombre">Nombre: </label>
                <input  type="text" name="inputNombre" id="inputNombre" class="form-control" placeholder="Escribe tu nombre">

                <label class="mt-3" for="inputEdad">Edad: </label>
                <input type="text" name="inputEdad" id="inputEdad" class="form-control" placeholder="Escribe tu edad">

                <label class="mt-3" for="inputCiudad">Ciudad: </label>
                <input type="text" name="inputCiudad" id="inputCiudad" class="form-control" placeholder="Escribe tu ciudad">

                <button type="submit" name="btnEnviarDatos" class="btn btn-secondary mt-3">Enviar Datos</button>

            </form>

        </div>

    </div>

</div>

<hr>

<?php include_once "partes/parte_footer.php" ?>