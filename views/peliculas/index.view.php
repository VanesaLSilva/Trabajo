<?php
require_once '../../layouts/headerview.php';

?>

        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Peliculas</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="../menu/index.php">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Peliculas
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                </div>
            <html>
                <body>
    <div class="container">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Año Lanzamiento</th>
                    <th scope="col">Duracion Alquiler</th>
                    <th scope="col">Rental Rate</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Replacement Cost</th>
                    <th scope="col">Clasificacion</th>
                    <th scope="col">Caracteristicas Especiales</th>
                    <th scope="col">Ultima Actualizacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($peliculas as $pelicula) : ?>
                    <tr>
                        <td><?= $pelicula->id_pelicula ?></td>
                        <td><?= $pelicula->titulo ?></td>
                        <td><?= $pelicula->descripcion ?></td>
                        <td><?= $pelicula->anyo_lanzamiento ?></td>
                        <td><?= $pelicula->duracion_alquiler ?></td>
                        <td><?= $pelicula->rental_rate ?></td>
                        <td><?= $pelicula->duracion ?></td>
                        <td><?= $pelicula->replacement_cost ?></td>
                        <td><?= $pelicula->clasificacion ?></td>
                        <td><?= $pelicula->caracteristicas_especiales ?></td>
                        <td><?= $pelicula->ultima_actualizacion ?></td>
                        <td>
                            <!-- btngroup - info, edit, delete -->
                            <div class="btn-group">
                                <a href="../../controllers/peliculas/createPeliculas.php" class="btn btn-sm  btn-primary">Añadir</a>
                                <a href="editPeliculas.php?id=<?= $pelicula->id_pelicula ?>" class="btn btn-sm  btn-warning">Editar</a>
                                <a href="deletePeliculas.php?id=<?= $pelicula->id_pelicula ?>" class="btn  btn-sm btn-danger">Eliminar</a>
                            </div>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>

<?php require_once '../../layouts/footerview.php'; ?>