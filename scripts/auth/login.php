<?php

define('DB_PATH', '../../db/');

session_start();

require_once DB_PATH.'db.php';
require_once DB_PATH.'tablas/usuarios.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$user = usuarios_verificar_si_existe($db, $email, $pass);

if($user) {
    $_SESSION['user'] = $user;
    header('Location: ../../admin/index.php');
} else {
    header('Location: ../../index.php?p=ingreso');
}
