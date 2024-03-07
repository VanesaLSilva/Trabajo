<?php

include_once  '../../models/empleados.php';
include_once  '../../models/direccion.php';
include_once  '../../models/ciudad.php';

$ciudades = Ciudad::all();

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $id_almacen = $_POST['id_almacen'];
    $username = $_POST['username'];
    $distrito = $_POST['distrito'];
    $codigo_postal = $_POST['codigo_postal'];
    $ciudad = $_POST['ciudad'];

    $direccioncreada = new Direccion();
    $direccioncreada->direccion = $direccion;
    $direccioncreada->distrito = $distrito;
    $direccioncreada->id_ciudad = 300;
    $direccioncreada->codigo_postal = $codigo_postal;
    $direccioncreada->create();

    $direccioncreada = Direccion::getLast();

    $empleado = new Empleado();
    $empleado->nombre = $nombre;
    $empleado->apellidos = $apellidos;
    $empleado->direccion = $direccion;
    $empleado->email = $email;
    $empleado->id_almacen = $id_almacen;
    $empleado->username = $username;
    $empleado->id_direccion = $direccioncreada->id_direccion;
    $empleado->create();
}

//Load view
include_once '../../views/empleados/createEmpleado.view.php';