<?php

// CONSULTAS A LA BASE DE DATOS DE LA TABLA 'Productos'

/////////////// Generales ///////////////

// Traer todos
function productos_traer_todos($db) {

    $sql = 'SELECT * FROM productos';

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $datos;

}

// Traer uno
function productos_traer_uno($db, $id) {

    $sql = "SELECT * FROM productos WHERE id = $id";

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $datos;

}

// Crear
function productos_crear($db, $descripcion, $stock) {

    $sql = "INSERT INTO `productos` (`id`, `descripcion`, `stock`, `fecha_alta`) VALUES (NULL, '$descripcion', '$stock', current_timestamp());";

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $filasAfectadas = mysqli_affected_rows($db);

    if($filasAfectadas > 0) 
        return $filasAfectadas;
    else 
        return false;

}

// Actualizar
function productos_actualizar($db, $id_v, $descripcion_n, $stock_n) {

    $sql = "UPDATE productos SET descripcion = '$descripcion_n' AND stock = '$stock_n' WHERE id = $id_v";

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $filasAfectadas = mysqli_affected_rows($db);

    if($filasAfectadas > 0) 
        return $filasAfectadas;
    else 
        return false;


}

// Borrar
function productos_borrar($db, $id) {

    $sql = "DELETE FROM productos WHERE id = $id";

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $filasAfectadas = mysqli_affected_rows($db);

    if($filasAfectadas > 0) 
        return $filasAfectadas;
    else 
        return false;

}


/////////////// Particulares ///////////////

function productos_traer_ultimos($db) {

    $sql = 'SELECT * FROM `productos` ORDER BY `fecha_alta` DESC LIMIT 3';

    $result = mysqli_query($db, $sql);

    if(!$result) return false;

    $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $datos;

}