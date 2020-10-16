<?php
require_once 'db/db.php';

require 'db/tablas/productos.php';

require_once 'functions/utils.php';

require_once 'template/cabecera.php';
if(isset($_GET['p']))
    require_once 'pages/'.$_GET['p'].'.php';
else
    require_once 'pages/home.php';
require_once 'template/pie.php';

