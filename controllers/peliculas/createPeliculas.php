<?php

include_once  '../../models/peliculas.php';
include_once  '../../models/idioma.php';


$idiomas = Idioma::all();

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

    $pelicula = new Pelicula();
    $pelicula->titulo = $titulo;
    $pelicula->descripcion = $descripcion;
    $pelicula->anyo_lanzamiento = $anyo_lanzamiento;
    $pelicula->id_idioma = $idioma;
    $pelicula->duracion_alquiler = $duracion_alquiler;
    $pelicula->rental_rate = $rental_rate;
    $pelicula->duracion = $duracion;
    $pelicula->replacement_cost = $replacement_cost;
    $pelicula->clasificacion = $clasificacion;
    $pelicula->create();
}

//Load view
include_once '../../views/peliculas/createPeliculas.view.php';

