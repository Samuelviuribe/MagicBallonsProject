<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "Decoraciones";


$conexion = new mysqli($host, $user, $pass, $db);

if (!$conexion) {
    echo "Conexion fallida";
} 
