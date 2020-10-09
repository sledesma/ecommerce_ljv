<?php

function put_log($registro) {
    $handle = fopen('log.dat', 'a');
    fwrite($handle, $registro.PHP_EOL);
    fclose($handle);
}

function get_log() {
    $handle = fopen('log.dat', 'r');
    $contenido = fread($handle, filesize('log.dat'));
    fclose($handle);
    return $contenido;
}


function get_csv($ruta) {

    $handle = fopen($ruta, 'r');

    $resultado = [];

    while($dato = fgetcsv($handle)) {
        array_push($resultado, $dato);
    }

    return $resultado;

}

function get_csv_with_headers($ruta) {

    $handle = fopen($ruta, 'r');

    $resultado = [];
    
    $cabeceras = fgetcsv($handle);
    
    while($dato = fgetcsv($handle)) {
        $aux = array_combine($cabeceras, $dato);
        array_push($resultado, $aux);
    }

    return $resultado;

}