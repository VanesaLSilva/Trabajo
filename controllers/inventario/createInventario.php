<?php

include_once  '../../models/inventario.php';
include_once  '../../models/almacen.php';
include_once  '../../models/peliculas.php';

$peliculas = Pelicula::all();
$almacenes = Almacen::all();

if (isset($_POST['submit'])) {
    $id_pelicula = $_POST['id_pelicula'];
    $id_almacen = $_POST['id_almacen'];

    $inventario = new Inventario();
    $inventario->id_pelicula = $id_pelicula;
    $inventario->id_almacen = $id_almacen;
    $inventario->create();
}

//Load view
include_once '../../views/inventario/createInventario.view.php';