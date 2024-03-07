<?php

require_once __DIR__ . '/../models/Conexion.php';

class Idioma extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM idioma");
        $pre->execute();
        $res = $pre->get_result();

        $idiomas = array();
        while ($idioma = $res->fetch_object(Idioma::class)) {
            array_push($idiomas, $idioma);
        }

        return $idiomas;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM idioma WHERE id_idioma = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $idioma = $res->fetch_object(Idioma::class);

        return $idioma;
    }
}