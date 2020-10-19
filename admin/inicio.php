<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        .tabla {
            width: 100%;
        }
    </style>
</head>
<body>
    <h2>Bienvenido administrador</h2>
    <form action="subidaMasa.php" method="post" enctype="multipart/form-data">
        Puede subir varios registros mediante un archivo CSV (Descripcion/Stock): 
        <input type="file" name="archivo">
        <button>Subir</button>
    </form>
    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (productos_traer_todos($db) as $fila): ?>
            <tr>
                <td><?= $fila['id'] ?></td>
                <td><?= $fila['descripcion'] ?></td>
                <td>
                    <a href="detalle.php?id=<?= $fila['id'] ?>">Ver</a>
                    <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
                    <a href="index.php?accion=borrar&id=<?= $fila['id'] ?>">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>