<?php

require_once __DIR__ . '/../models/Conexion.php';

class Pago extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pago");
        $pre->execute();
        $res = $pre->get_result();

        $pagos = array();
        while ($pagos = $res->fetch_object(Pago::class)) {
            array_push($pagos, $pagos);
        }

        return $pagos;
    }
}