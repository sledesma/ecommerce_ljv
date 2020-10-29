<?php
/**
 * La función move_uploaded_file copia el contenido
 * de la ruta temporal de $_FILES a un archivo
 * definitivo en la carpeta DEL SERVIDOR
 */
move_uploaded_file($rutaTemporal, 'imagen.jpeg'); 