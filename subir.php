<?php
require("conexion1.php");
$nomLugar=$_POST['nombre'];
$gen=$_POST['dias'];
$price=$_POST['precio'];

$var_consulta= "INSERT INTO lugares (nombre,dias,precio) VALUES ('$nomLugar','$gen','$price')";
$obj_conexion->query($var_consulta);

 header("Location:mensaje.php");
?>