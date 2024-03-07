<?php

require_once __DIR__ . '/../models/Conexion.php';

class Alquiler extends Conexion {

    public $id_alquiler;
    public $fecha_alquiler;
    public $id_inventario;
    public $id_cliente;
    public $fecha_devolucion;
    public $id_empleado;
    public $ultima_actualizacion;



 

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alquiler (fecha_alquiler, id_inventario, id_cliente, fecha_devolucion, id_empleado, ultima_actualizacion) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssssss", $this->fecha_alquiler, $this->id_inventario, $this->id_cliente, $this->fecha_devolucion, $this->id_empleado, $this->ultima_actualizacion);
        $pre->execute();
    }

    public function cliente()
    {
        return Cliente::getById($this->id_cliente);
    }

    public function empleado()
    {
        return Empleado::getById($this->id_empleado);
    }

    public function inventario()
    {
        return Inventario::getById($this->id_inventario);
    }

    public function pelicula()
    {
        return Pelicula::getById($this->id_pelicula);
    }
}
