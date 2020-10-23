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
        return true;
    else
        return false;

}

