<?php
/**
 * @param string $url URL Al json
 * @return array Un array asociativo con los datos
 */
function load_json($url) {
    $contenido = file_get_contents($url);
    $datos = json_decode($contenido, true);
    return $datos;
}
/**
 * @param string $file URL Al json local
 * @return array Un array asociativo con los datos
 */
function load_local_json($file) {
    if(file_exists($file)) {
        $contenido = file_get_contents($file);
        $datos = json_decode($contenido, true);
        return $datos;
    } 
}

function mi_echo($data) {
    file_put_contents('php://output', $data);
}