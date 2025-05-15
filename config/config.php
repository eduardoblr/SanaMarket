<?php
$host="13.91.42.72";
$usuario="admin00";
$contraseña="Adminadmin31415&";
$nombre_bd="SanaMarket_DB";
$conexion = new mysqli($host, $usuario, $contraseña, $nombre_bd);
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>