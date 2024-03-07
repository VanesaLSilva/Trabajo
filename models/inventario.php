<?php

require_once __DIR__ . '/../models/Conexion.php';

class Inventario extends Conexion{

    public $id_pelicula;
    public $id_almacen;
    public $ultima_actualizacion;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM inventario WHERE id_almacen = 1");
        $pre->execute();
        $res = $pre->get_result();

        $inventarios = array();
        while ($inventario = $res->fetch_object(Inventario::class)) {
            array_push($inventarios, $inventario);
        }

        return $inventarios;
    }

    
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO inventario (id_pelicula, id_almacen, ultima_actualizacion) VALUES (?, ?, ?)");
        $pre->bind_param("iii", $this->id_pelicula, $this->id_almacen, $this->ultima_actualizacion);
        $pre->execute();
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM inventario WHERE id_inventario = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $inventario = $res->fetch_object(Inventario::class);

        return $inventario;
    }


    public function pelicula()
    {
        return Pelicula::getById($this->id_pelicula);
    }

    public function almacen()
    {
        return Almacen::getById($this->id_almacen);
    }
}