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

                    <label class="mt-3" for="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Escribe el apellido del actor">

                    <label class="mt-3" for="añoLanzamiento">Año de lanzamiento:</label>
                    <input type="text" name="añoLanzamiento" id="añoLanzamiento" class="form-control" placeholder="Escribe el año de lanzamiento">

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

                    <label for="clasificacion" class="form-label mt-3">Clasificación:</label>
                    <input type="text" name="clasificacion" id="clasificacion" class="form-control" placeholder="Escribe la clasificacion">

                    <label class="mt-3" for="duracionPelicula">Duración de la película:</label>
                    <input type="time" name="duracionPelicula" id="duracionPelicula" class="form-control">

                    <label class="mt-3" for="caracteristicasPelicula">Características de la película:</label>
                    <input type="text" name="caracteristicasPelicula" id="caracteristicasPelicula" class="form-control" placeholder="Escribe las caractersticas de la película">

                    <button type="submit" name="btnGuardarPelicula" class="btn btn-secondary mt-3">Guardar Datos</button>

                </form>

                <hr>

                <div class="row mt-3">

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

            </div>

        </div>

    </div>

<hr>

<?php include_once "partes/parte_footer.php" ?>