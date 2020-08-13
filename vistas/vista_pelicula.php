<?php include_once "partes/parte_head.php"?>

<body>

<?php include_once "partes/parte_menu.php"?>

<h1 class="mt-5" align="center">Bienvenidos a la página <?php echo $nombrePagina; ?> </h1>

    <div class="container">

        <div class="row">

            <div class="col-md-3">

            </div>

            <div class="col-md-5">

                <form action="" method="post" >

                    <label for="pelicula">Título de la película: </label>
                    <input  type="text" name="pelicula" id="pelicula" class="form-control" placeholder="Escribe el título de la película">

                    <div class="mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripción:</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Escribe el apellido del actor" rows="3"></textarea>
                    </div>

                    <label for="exampleDataList" class="form-label mt-3">Año de lanzamiento:</label>
                    <input class="form-control" list="listaAños" id="exampleDataList" placeholder="Escribe el año de lanzamiento">
                    <datalist id="listaAños">

                         <?php

                         for($year = date("Y"); $year >= 1900; $year--){
                            echo "<option value=\"{$year}\">";
                         }

                         ?>

                    </datalist>

                    <label class="mt-3" for="idiomaOriginal">Idioma Original:</label>
                    <select class="form-select" name="idiomaOriginal" id="idiomaOriginal">
                        <option value="">Selecciona un idioma</option>
                        <?php

                        foreach ($idiomas as $idioma)
                            echo "<option value=\"{$idioma['language_id']}\">{$idioma['name']}</option>";

                        ?>
                    </select>

                    <label class="mt-3" for="idioma">Idioma:</label>
                    <select class="form-select" name="idioma" id="idioma">
                        <option value="">Selecciona un idioma</option>
                        <?php

                        foreach ($idiomas as $idioma)
                            echo "<option value=\"{$idioma['language_id']}\">{$idioma['name']}</option>";

                        ?>
                    </select>

                    <label class="mt-3" for="duracionAlquiler">Duración del alquiler:</label>
                    <input type="datetime-local" name="duracionAlquiler" id="duracionAlquiler" class="form-control">

                    <label class="mt-3" for="tarifaAlquiler">Tarifa del alquiler:</label>
                    <input type="text" name="tarifaAlquiler" id="tarifaAlquiler" class="form-control" placeholder="Escribe la tarifa de alquiler">

                    <label class="mt-3" for="costoReemplazo">Costo de reemplazo:</label>
                    <input type="text" name="costoReemplazo" id="costoReemplazo" class="form-control" placeholder="Escribe el costo de reemplazo">

                    <div class="mt-3">

                        <label for="clasificacion" class="form-label">Clasificación:</label>

                        <select class="form-select" name="clasificacion" id="clasificacion">

                            <option value="">Elige una Clasificacion</option>

                            <?php

                            $clasificaciones = ['G', 'PG', 'PG-13', 'R', 'NC-17'];

                            foreach ($clasificaciones as $clasificacion){
                                echo "<option value=\"{$clasificacion}\">{$clasificacion}</option>";
                            }

                            ?>

                        </select>

                    </div>


                    <label class="mt-3" for="duracionPelicula">Duración de la película:</label>
                    <input type="time" name="duracionPelicula" id="duracionPelicula" class="form-control">

                    <div class="mt-3">

                        <label for="caracteristicasPelicula" class="form-label">Características de la película:</label>

                        <select class="form-select" name="caracteristicasPelicula" id="caracteristicasPelicula">

                            <option value="">Elige una Caracteristica</option>

                            <?php

                            $caracteristicas = ['Trailers', 'Commentaries', 'Deleted Scenes', 'Behind the Scenes'];

                            foreach ($caracteristicas as $caracteristica){
                                echo "<option value=\"{$caracteristica}\">{$caracteristica}</option>";
                            }

                            ?>

                        </select>

                    </div>

                    <button type="submit" name="btnGuardarPelicula" class="btn btn-secondary mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Datos</button>

                </form>

                <hr>

                <?php if(empty($peliculas)) { ?>

                    <?php include_once "partes/parte_info.php" ?>

                <?php }?>

            </div>

        </div>

        <?php if(!empty($peliculas)) { ?>

        <div class="row">

            <div class="col-md-12">

                <table class="table table-striped table-hover">

                    <thead>
                    <th scope="col">ID de la Película</th>
                    <th scope="col">Título</th>
                    <th scope="col">Año de lanzamiento</th>
                    <th scope="col">Idioma</th>
                    <th scope="col">Idioma Original</th>
                    <th scope="col">Duración del Alquiler</th>
                    <th scope="col">Tarifa del Alquiler</th>
                    <th scope="col">Costo de Reemplazo</th>
                    <th scope="col">Clasificación</th>
                    <th scope="col">Duración de la película</th>
                    <th scope="col">Características de la película</th>
                    </thead>

                    <tbody>

                    <?php
                    foreach ($peliculas as $pelicula){
                    echo "<tr>
                                <th scope=\"row\">{$pelicula['film_id']}</th>
                                <td>{$pelicula['title']}</td>
                                <td>{$pelicula['release_year']}</td>
                                <td>{$pelicula['Idioma']}</td>
                                <td>{$pelicula['Idioma_Original']}</td>
                                <td>{$pelicula['rental_duration']}</td>
                                <td>{$pelicula['rental_rate']}</td>
                                <td>{$pelicula['replacement_cost']}</td>
                                <td>{$pelicula['rating']}</td>
                                <td>{$pelicula['length']}</td>
                                <td>{$pelicula['special_features']}</td>
                            </tr>";
                    }
                    ?>

                    </tbody>

                </table>

            </div>

        </div>

        <?php } ?>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>