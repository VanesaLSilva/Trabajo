<?php

$id = $_GET['id'];
//init session
session_start();
//Clean session
unset($_SESSION['message']);
unset($_SESSION['error_message']);

require_once __DIR__ . '/../../models/peliculas.php';
$pelicula = Pelicula::getById($id);


if ($pelicula) {
    $pelicula->delete();
    //redirecto to Index
    header('Location: ../peliculas/index.php');
} else {
    echo "No se ha podido eliminar";
}
