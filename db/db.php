<?php

/**
 * CASOS DE USO DE PDO
 * 1) Al conectarse con otros motores de bases de datos que no sean MySQL
 * 2) Al querer desacoplar / desglosar / dividir el código
 */

// CONECTAR CON LA BASE DE DATOS
// Basado en la clase PDO

$db = false;

try {

    $db = new PDO('mysql:host=localhost;dbname=ecommerce_ljv', 'root', '');

} catch(Exception $ex) {

    die('Error al conectarse con la base de datos');

}