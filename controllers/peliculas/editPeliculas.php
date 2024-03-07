<?php

require_once __DIR__ . '/../../models/peliculas.php';
require_once __DIR__ . '/../../models/idioma.php';

$idiomas = Idioma::all();

$id = $_GET['id'];
$pelicula = Pelicula::getById($id);


if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $anyo_lanzamiento = $_POST['anyo_lanzamiento'];
    $idioma = $_POST['idioma'];
    $duracion_alquiler = $_POST['duracion_alquiler'];
    $rental_rate = $_POST['rental_rate'];
    $duracion = $_POST['duracion'];
    $replacement_cost = $_POST['replacement_cost'];
    $clasificacion = $_POST['clasificacion'];

    $pelicula->titulo = $titulo;
    $pelicula->descripcion = $descripcion;
    $pelicula->anyo_lanzamiento = $anyo_lanzamiento;
    $pelicula->id_idioma = $idioma;
    $pelicula->duracion_alquiler = $duracion_alquiler;
    $pelicula->rental_rate = $rental_rate;
    $pelicula->duracion = $duracion;
    $pelicula->replacement_cost = $replacement_cost;
    $pelicula->clasificacion = $clasificacion;
    $pelicula->update();
}


if ($pelicula) {
    require_once __DIR__ . '/../../views/peliculas/editPeliculas.view.php';
} else {
    echo "No se encuentra pelicula";
}