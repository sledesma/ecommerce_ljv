<?php

header('Content-type: application/json');

require_once 'db/db.php';
require_once 'db/tablas/productos.php';

echo json_encode(productos_traer_ultimos($db));

/*
Pueden organizar un proyecto, en el que
una persona se ocupe únicamente del FRONT
END con HTML / CSS / JS; y otra persona
se ocupe únicamente del BACK END Y LA BASE
DE DATOS con PHP y MySQL.

Se las cuento, porque, hacer todo junto
HTML, CSS, JS... PHP y MYSQL como lo fuimos
haciendo, no es la única forma.

VAMOS AL BREAK Y VOLVEMOS 11:40 :)
*/