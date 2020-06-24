<?php include_once "partes/parte_head.php" ?>

<?php include_once "partes/parte_menu.php" ?>

<body>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

<div class="container">

    <div class="row">

        <div class="col-md-5">

            <form action="" method="get" >

                <label for="categoria">Nombre de la Categoría:</label>
                <input  type="text" name="categoria" id="categoria" class="form-control" placeholder="Escribe el nombre de la categoría">

                <button type="submit" name="btnGuardarCategoria" class="btn btn-secondary mt-4">Guardar Datos</button>

            </form>

        </div>

    </div>

</div>


<hr>

<?php include_once "partes/parte_footer.php" ?>