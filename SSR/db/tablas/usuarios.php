<?php

// Funcionalidad de la tabla usuarios


function usuarios_verificar_si_existe($db, $email, $clave) {

    $sql = "SELECT * FROM usuarios WHERE email = :email AND clave = :clave";

    $consulta = $db->prepare($sql);

    $consulta->bindValue(':email', $email, PDO::PARAM_STR);
    $consulta->bindValue(':clave', $clave, PDO::PARAM_STR);

    $consulta->execute();

    $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

    if(count($datos) > 0)
        return $datos[0];
    else
        return false;

}

// Alta del usuario
/* $campos = [
    'nombre' => '',
    'apellido' => '',    
    'email' => '',
    'clave' => ''
    ]
*/
function usuarios_crear($db, $campos) {
    $sql = "INSERT INTO usuarios (email, clave, nombre, apellido, token, ts_alta, crear, borrar, actualizar, leer) VALUES (:email, :clave, :nombre, :apellido, :token, current_timestamp(), 0,0,0,0)";

    $consulta = $db->prepare($sql);

    $consulta->bindValue(':email', $campos['email'], PDO::PARAM_STR);
    $consulta->bindValue(':clave', $campos['clave'], PDO::PARAM_STR);
    $consulta->bindValue(':nombre', $campos['nombre'], PDO::PARAM_STR);
    $consulta->bindValue(':apellido', $campos['apellido'], PDO::PARAM_STR);
    $consulta->bindValue(':token', hash('md5', $campos['email'].$campos['clave'].$campos['nombre'].$campos['apellido']), PDO::PARAM_STR);
    
    $consulta->execute();

    if($consulta->rowCount() > 0)
        return true;
    else
        return false;
        
}