<?php

require_once "functions.php";

// Recibir la petición HTTP

// Recibimos la parte NO BINARIA de un multipart/form-data
// var_dump($_POST);
// Recibimos la parte BINARIA de un multipart/form-data
// var_dump($_FILES);
/*
array(1) { 
    ["archivo"]=> array(5) { 
        ["name"]=> string(8) "Teoria_9" 
        ["type"]=> string(24) "application/octet-stream" 
        ["tmp_name"]=> string(25) "/opt/lampp/temp/phpcftVqV" 
        ["error"]=> int(0) 
        ["size"]=> int(456) 
    } 
}
*/
$nombre = $_FILES['archivo']['name'];
$rutaTemporal = $_FILES['archivo']['tmp_name'];
$datosDelTipo = explode('/', $_FILES['archivo']['type']); // ['tipo', 'subtipo']
$tipo = $datosDelTipo[0];
$subtipo = $datosDelTipo[1];

$archivo = get_csv_with_headers($rutaTemporal);

$totalVendido = array_reduce($archivo, function($prev, $item){
    return $prev + ($item['Cantidad'] * $item['PrecioUnitario']);
});

// Enviar la respuesta HTTP

if($tipo != 'text' || $subtipo != 'csv') 
    header('Location: cliente.php?msj=Formato no soportado');

echo "<h1>$nombre</h1>";
echo "<p>Tipo: $tipo | Subtipo: $subtipo</p>";
echo "<p>Total vendido: $$totalVendido</p>";

