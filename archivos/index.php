<?php

require_once "f_functions.php";

$datos = get_csv_with_headers('items.csv');

$total = array_reduce($datos, function($prev, $item) {
    return $prev + $item['PrecioUnitario'];
});

echo 'Total vendido: $'.$total;
