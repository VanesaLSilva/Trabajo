<?php

require_once __DIR__ . '/../models/Conexion.php';

class Ciudad extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM ciudad");
        $pre->execute();
        $res = $pre->get_result();

        $ciudades = array();
        while ($ciudad = $res->fetch_object(Ciudad::class)) {
            array_push($ciudades, $ciudad);
        }

        return $ciudades;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM ciudad WHERE id_ciudad = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $ciudad = $res->fetch_object(Ciudad::class);

        return $ciudad;
    }
}
