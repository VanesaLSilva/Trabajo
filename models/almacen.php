<?php

require_once __DIR__ . '/../models/Conexion.php';

class Almacen extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM almacen");
        $pre->execute();
        $res = $pre->get_result();

        $almacenes = array();
        while ($almacen = $res->fetch_object(Almacen::class)) {
            array_push($almacenes, $almacen);
        }

        return $almacenes;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM almacen WHERE id_almacen = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $almacen = $res->fetch_object(Almacen::class);

        return $almacen;
    }
}