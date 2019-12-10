<?php
require("model/conexion.php");
$nomLugar=$_POST['nombre'];
$gen=$_POST['genero'];
$price=$_POST['precio'];

mysqli_query("INSERT INTO  lugares (nombre,dias,precio) VALUES ('$nomLugar','$gen',$price')");
 header("Location:mensaje.php");
?>