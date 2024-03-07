<?php

require_once __DIR__ . '/../models/Conexion.php';

class Pais extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pais");
        $pre->execute();
        $res = $pre->get_result();

        $paises = array();
        while ($pais = $res->fetch_object(Pais::class)) {
            array_push($paises, $pais);
        }

        return $paises;
    }
}