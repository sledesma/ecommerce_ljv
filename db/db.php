<?php

// CONECTAR CON LA BASE DE DATOS

$db = mysqli_connect('localhost', 'root', '', 'ecommerce_ljv');

if(!$db) die('Error al conectarse con la base de datos');