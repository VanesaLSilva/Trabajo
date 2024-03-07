
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
                            <h3 class="mb-0">Editar Pelicula</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="../menu/index.php">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Editar Pelicula
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
                                <div class="col-md-3">
                                    <label for="titulo" class="form-label">Titulo</label>
                                    <input type="text" value="<?= $pelicula->titulo ?>" class="form-control" id="titulo" name="titulo" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="descripcion" class="form-label">Descripcion</label>
                                    <input type="text" value="<?= $pelicula->descripcion ?>" class="form-control" id="descripcion" name="descripcion" required>

                                </div>
                            </div>
                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-3">
                                    <label for="anyo_lanzamiento" class="form-label">Año Lanzamiento</label>
                                    <input type="text" value="<?= $pelicula->anyo_lanzamiento ?>" class="form-control" id="anyo_lanzamiento" name="anyo_lanzamiento" required>


                                </div>
                                <div class="row">
                                <!-- ID idioma -->
                                <div class="col-md-6">
                                    <label for="idioma" class="form-label">Idioma</label>
                                    <select class="form-select"  name="idioma" required>
                                    <?php foreach ($idiomas as $idioma) : ?>
                                            <?php if ($idioma->id_idioma == $pelicula->idioma()->id_idioma) { ?>
                                                <option value="<?= $idioma->id_idioma ?>" selected><?= $idioma->nombre ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $idioma->id_idioma ?>"><?= $idioma->nombre ?></option>
                                            <?php } ?>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                                <!-- duracion_alquiler -->
                                <div class="col-md-3">
                                    <label for="duracion_alquiler" class="form-label">Duracion Alquiler</label>
                                    <input type="text" value="<?= $pelicula->duracion_alquiler ?>" class="form-control" id="duracion_alquiler" name="duracion_alquiler" required>

                                </div>
                            <div class="row">
                                <!-- Direccion 2 -->
                                <div class="col-md-3">
                                    <label for="rental_rate" class="form-label">Rental Rate</label>
                                    <input type="text" value="<?= $pelicula->rental_rate ?>" class="form-control" id="rental_rate" name="rental_rate" required>


                                </div>
                                <!-- Distrito -->
                                <div class="col-md-3">
                                    <label for="duracion" class="form-label">Duracion</label>
                                    <input type="text" value="<?= $pelicula->duracion ?>" class="form-control" id="duracion" name="duracion" required>

                                </div>
                            <div class="row">
                                <!-- Codigo postal -->
                                <div class="col-md-3">
                                    <label for="replacement_cost" class="form-label">Replacement Cost</label>
                                    <input type="text" value="<?= $pelicula->replacement_cost ?>" class="replacement_cost" id="replacement_cost" name="replacement_cost" required>


                                </div>
                                <!-- clasificacion -->
                                <div class="col-md-6">
                                    <label for="clasificacion" class="form-label">Clasificacion</label>
                                    <select class="form-select" id="clasificacion" name="clasificacion" required>
                                        <option value="G" <?php if($pelicula->clasificacion == "G"){ echo "selected"; }?>>G</option>
                                        <option value="PG" <?php if($pelicula->clasificacion == "PG"){ echo "selected"; }?>>PG</option>
                                        <option value="PG-13" <?php if($pelicula->clasificacion == "PG-13"){ echo "selected"; }?>>PG-13</option>
                                        <option value="R" <?php if($pelicula->clasificacion == "R"){ echo "selected"; }?>>R</option>
                                        <option value="NC-17" <?php if($pelicula->clasificacion == "NC-17"){ echo "selected"; }?>>NC-17</option>
                                    </select>

                                </div>

                                
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