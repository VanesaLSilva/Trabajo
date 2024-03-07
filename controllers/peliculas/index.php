<?php

include_once  '../../models/peliculas.php';

$peliculas =  Pelicula::all();

include_once '../../views/peliculas/index.view.php';