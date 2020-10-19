<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        CONFIGURACION DEL LADO DEL CLIENTE
        
        * Se necesita como mínimo un campo de tipo FILE, con un name
        * Action debe referir al archivo PHP
        * Method debe ser POST
                Peticion HTTP
                    URL: string
                    CABECERAS:
                    CUERPO: cualquier dato
        * Configurar el tipo de codificación (ENCoding TYPE) para que
        admita archivos binarios. El tipo multipart/form-data indica una
        codificación "mezclada" (multipart) entre texto y datos binarios.
    -->
    
    <form action="servidor.php" method="POST" enctype="multipart/form-data">
        Archivo: <input type="file" name="archivo" accept=".php, .csv">
        <button>Enviar</button>
    </form>
    <div>
    <?php
    if(isset($_GET['msj'])) {
        echo $_GET['msj'];
    }
    ?>
    </div>
</body>
</html>