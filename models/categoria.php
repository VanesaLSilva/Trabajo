<?php

require_once __DIR__ . '/../models/Conexion.php';

class Categoria extends Conexion{

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM categoria");
        $pre->execute();
        $res = $pre->get_result();

        $categorias = array();
        while ($categoria = $res->fetch_object(Categoria::class)) {
            array_push($categorias, $categoria);
        }

        return $categorias;
    }
}