<?php

require_once "../db/db.php";
require_once "../db/tablas/productos.php";

$archivo = $_FILES['archivo'];
$ruta = $archivo['tmp_name'];
$tipoMime = $archivo['type'];

if($tipoMime != 'text/csv')
    die(
        'Formato no soportado. <a href="index.php">Volver</a>'
    );

$handle = fopen($ruta, 'r');
$datos = [];
$cabeceras = fgetcsv($handle);
while($dato = fgetcsv($handle)) {
    $aux = array_combine($cabeceras, $dato);
    array_push($datos, $aux);
}

foreach ($datos as $fila) {
    $filas = productos_crear($db, $fila['Descripcion'], $fila['Stock']);
    echo $filas.' filas afectadas <hr />';
}

echo '<a href="index.php">Volver</a>';