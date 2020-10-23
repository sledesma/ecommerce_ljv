<?php

define('DB_PATH', '../../db/');

require_once DB_PATH.'db.php';
require_once DB_PATH.'tablas/usuarios.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['pass'];

if (
    usuarios_crear($db, [
        'nombre' => $nombre,
        'apellido' => $apellido,    
        'email' => $email,
        'clave' => $clave
    ])
) {
    header('Location: ../../index.php?p=ingreso');
} else {
    header('Location: ../../index.php?p=registro');
}