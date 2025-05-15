<?php
require_once('config.php');
$id= $_GET['id'];
$query= "DELETE FROM Producto WHERE producto_id = $id";
$conexion->query($query);
header("Location: /modulos/productos/lista_productos.php");
?>
