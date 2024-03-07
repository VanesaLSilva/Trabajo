<?php

require_once __DIR__ . '/../models/Conexion.php';

class Pelicula extends Conexion {

    public $titulo;
    public $descripcion;
    public $anyo_lanzamiento;
    public $id_idioma;
    public $duracion_alquiler;
    public $rental_rate;
    public $duracion;
    public $replacement_cost;
    public $clasificacion;
    public $caracteristicas_especiales;

 

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO pelicula (titulo, descripcion, anyo_lanzamiento, id_idioma, duracion_alquiler, rental_rate, duracion, replacement_cost, clasificacion, caracteristicas_especiales ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssssssssss", $this->titulo, $this->descripcion, $this->anyo_lanzamiento, $this->id_idioma, $this->duracion_alquiler, $this->rental_rate, $this->duracion, $this->replacement_cost, $this->clasificacion, $this->caracteristicas_especiales);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE pelicula SET titulo = ?, descripcion = ?, anyo_lanzamiento = ?, id_idioma = ?, duracion_alquiler = ?, rental_rate = ?, duracion = ?, replacement_cost = ?, clasificacion = ? WHERE id_pelicula = ?");
        $pre->bind_param("sssiiiiisi", $this->titulo, $this->descripcion, $this->anyo_lanzamiento, $this->id_idioma, $this->duracion_alquiler, $this->rental_rate, $this->duracion, $this->replacement_cost, $this->clasificacion, $this->id_pelicula);
        $pre->execute();
    }


    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pelicula");
        $pre->execute();
        $res = $pre->get_result();

        $peliculas = array();
        while ($pelicula = $res->fetch_object(Pelicula::class)) {
            array_push($peliculas, $pelicula);
        }

        return $peliculas;
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM pelicula WHERE id_pelicula = ?");
        $pre->bind_param("i", $this->id_pelicula);
        $pre->execute();

    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pelicula WHERE id_pelicula = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $pelicula = $res->fetch_object(Pelicula::class);

        return $pelicula;
    }


    public function idioma()
    {
        return Idioma::getById($this->id_idioma);
    }

}

