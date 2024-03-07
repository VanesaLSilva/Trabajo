<?php

$id = $_GET['id'];
//init session
session_start();
//Clean session
unset($_SESSION['message']);
unset($_SESSION['error_message']);

require_once __DIR__ . '/../../models/clientes.php';
$cliente = Cliente::getById($id);


if ($cliente) {
    $cliente->delete();
    //redirecto to Index
    header('Location: ../clientes/index.php');
} else {
    echo "No se ha podido eliminar";
}

