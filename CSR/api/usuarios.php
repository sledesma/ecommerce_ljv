<?php

header('Content-type: application/json');

require_once 'db/db.php';
require_once 'db/tablas/usuarios.php';

echo json_encode([
    'respuesta' => usuarios_verificar_si_existe($db, $_POST['email'], $_POST['pass'])
]);