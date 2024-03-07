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
                            <h3 class="mb-0">Empleados</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="../menu/index.php">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Empleados
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">ID Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Almacen</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Username</th>
                    <th scope="col">Ultima Actualizacion</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($empleados as $empleado) : ?>
                    <tr>
                        <td><?= $empleado->id_empleado ?></td>
                        <td><?= $empleado->nombre ?></td>
                        <td><?= $empleado->apellidos ?></td>
                        <td><?= $empleado->id_direccion ?></td>
                        <td><?= $empleado->email ?></td>
                        <td><?= $empleado->id_almacen ?></td>
                        <td><?= $empleado->activo ?></td>
                        <td><?= $empleado->username ?></td>
                        <td><?= $empleado->ultima_actualizacion ?></td>
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