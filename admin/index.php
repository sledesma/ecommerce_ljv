<?php

// VERIFICAR SI HAY UNA SESION INICIADA
require_once "../db/db.php";
require_once "../db/tablas/productos.php";
require_once "../db/tablas/usuarios.php";

session_start();

if(
    isset($_SESSION['user']) &&
    is_array($_SESSION['user']) &&
    usuarios_verificar_si_existe(
        $db,
        $_SESSION['user']['email'],
        $_SESSION['user']['clave']
    )
) {

    if(isset($_GET['accion'])) {
        switch($_GET['accion']) {
            case 'borrar':
                productos_borrar($db, $_GET['id']);
                header('Location: index.php');
            break;

            default:
                require_once 'inicio.php';
            break;
        }
    } else {
        require_once 'inicio.php';
    }

} else {
    header('Location: ../index.php?p=ingreso');
}