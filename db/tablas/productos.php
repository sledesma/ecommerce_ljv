<?php


// CONSULTAS A LA BASE DE DATOS DE LA TABLA 'Productos'
// Basado en la clase PDOStatement

/////////////// Generales ///////////////

// Traer todos
function productos_traer_todos($db) {

    $sql = 'SELECT * FROM productos';

    $consulta = $db->query($sql);

    if(!$consulta) return false;

    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $datos;
}

// Traer uno
function productos_traer_uno($db, $id) {

    $sql = "SELECT * FROM productos WHERE id = :identificador";

    $consulta = $db->prepare($sql);

    $consulta->bindValue(':identificador', $id, PDO::PARAM_INT);

    $consulta->execute();

    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $datos;

}

// Crear
function productos_crear($db, $descripcion, $stock) {

    $sql = "INSERT INTO `productos` (`id`, `descripcion`, `stock`, `fecha_alta`) VALUES (NULL, '$descripcion', '$stock', current_timestamp());";

    $consulta = $db->exec($sql); // Consulta devuelve la cantidad de filas afectadas

    if($consulta === false) return false;

    return $consulta;

}

// Actualizar
function productos_actualizar($db, $id_v, $descripcion_n, $stock_n) {

    $sql = "UPDATE productos SET descripcion = '$descripcion_n' AND stock = '$stock_n' WHERE id = $id_v";


}

// Borrar
function productos_borrar($db, $id) {

    $sql = "DELETE FROM productos WHERE id = $id";


}


/////////////// Particulares ///////////////

function productos_traer_ultimos($db) {

    $sql = 'SELECT * FROM `productos` ORDER BY `fecha_alta` DESC LIMIT 3';


}