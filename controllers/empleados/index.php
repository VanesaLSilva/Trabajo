<?php

include_once  '../../models/empleados.php';

$empleados =  Empleado::all();

include_once '../../views/empleados/index.view.php';