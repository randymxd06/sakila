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

                    <label for="categoria">Nombre de la Categoría:</label>
                    <input  type="text" name="categoria" id="categoria" class="form-control" placeholder="Escribe el nombre de la categoría">

                    <button type="submit" name="btnGuardarCategoria" class="btn btn-secondary mt-4"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

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

                if(isset($categoriaInsertada)){
                    echo "<div class=\"alert alert-success alert-dismissible fade show mt-3\" role=\"alert\">
                            La categoría se ha insertado correctamente.
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>";
                }

                ?>

            </div>

            <hr>

            <div class="row">

                <div class="col-md-12">

                    <table class="table table-striped table-hover">

                        <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre de la Categoria</th>
                        </thead>

                        <tbody>

                        <?php
                        foreach ($categorias as $categoria){
                            echo "<tr>
                                <th scope=\"row\">{$categoria['category_id']}</th>
                                <td>{$categoria['name']}</td>
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