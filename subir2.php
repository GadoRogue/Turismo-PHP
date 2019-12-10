<?php
require("model/conexion.php");
$id=$_POST['idLugar'];
$new_nomPeli=$_POST['nombre'];
$new_gen=$_POST['dias'];
$new_price=$_POST['precio'];

mysqli_query("UPDATE peliculas SET nombre='$new_nomPeli', dias='$new_day', precio='$new_price' WHERE idLugar='$id'");
 header("Location:mensaje2.php");
?>