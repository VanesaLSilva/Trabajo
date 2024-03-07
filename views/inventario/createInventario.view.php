


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
                            <h3 class="mb-0">Crear Inventario</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="../menu/index.php">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Crear Inventario
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

                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" method="POST" novalidate>
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="id_pelicula" class="form-label">Pelicula</label>
                                    <select class="form-select"  name="id_pelicula" required>
                                        <?php foreach ($peliculas as $pelicula) : ?>
                                            <option value="<?= $pelicula->id_pelicula ?>"><?= $pelicula->titulo ?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <div class="row">
                                <!-- ID almacen -->
                                <div class="col-md-6">
                                    <label for="id_almacen" class="form-label">Almacen</label>
                                    <select class="form-select"  name="id_almacen" required>
                                        <?php foreach ($almacenes as $almacen) : ?>
                                            <option value="<?= $almacen->id_almacen ?>"><?= $almacen->id_almacen ?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <button name="submit" class="btn btn-primary" type="submit">Aceptar</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>

<?php require_once '../../layouts/footerview.php'; ?>