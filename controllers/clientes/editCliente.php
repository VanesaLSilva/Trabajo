<?php

require_once __DIR__ . '/../../models/clientes.php';
require_once __DIR__ . '/../../models/ciudad.php';
require_once __DIR__ . '/../../models/direccion.php';

$ciudades = Ciudad::all();

$id = $_GET['id'];
$cliente = Cliente::getById($id);

if (isset($_POST['submit'])) {
    $id_almacen = $_POST['id_almacen'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $direccion2 = $_POST['direccion2'];
    $distrito = $_POST['distrito'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];
    $id_ciudad = $_POST['id_ciudad'];

    $direc = Direccion::getById($cliente->id_direccion);
    $direc->direccion = $direccion;
    $direc->direccion2 = $direccion2;
    $direc->distrito = $distrito;
    $direc->id_ciudad = $id_ciudad;
    $direc->codigo_postal = $codigo_postal;
    $direc->telefono = $telefono;
    $direc->update();

    $cliente->id_almacen = $id_almacen;
    $cliente->nombre = $nombre;
    $cliente->apellidos = $apellidos;
    $cliente->email = $email;
    $cliente->update();

}


if ($cliente) {
    require_once __DIR__ . '/../../views/clientes/editCliente.view.php';
} else {
    echo "No se encuentra cliente";
}