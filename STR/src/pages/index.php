<?php
require_once 'db/db.php';
require_once 'db/tablas/productos.php';
$data = productos_traer_todos($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Descripcion</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $fila): ?>
                <tr>
                    <td><?= $fila['descripcion'] ?></td>
                    <td><?= $fila['stock'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>