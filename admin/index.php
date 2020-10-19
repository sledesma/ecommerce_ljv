<?php

require_once "../db/db.php";
require_once "../db/tablas/productos.php";

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
/*
1) ATR III
2) Repaso II
3) Tengo hambre, quiero irme
*/