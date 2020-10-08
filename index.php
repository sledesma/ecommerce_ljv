<?php

require_once 'template/cabecera.php';
if(isset($_GET['p']))
    require_once 'pages/'.$_GET['p'].'.php';
else
    require_once 'pages/home.php';
require_once 'template/pie.php';


/*
include
include_once
require
require_once
*/
