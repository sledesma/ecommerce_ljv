<?php

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