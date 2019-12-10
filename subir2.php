<?php
require("conexion1.php");
$id=$_POST['idLugar'];
$new_nomPeli=$_POST['nombre'];
$new_gen=$_POST['dias'];
$new_price=$_POST['precio'];

$var_consulta=("UPDATE lugares SET nombre='$new_nomPeli', dias='$new_gen', precio='$new_price' WHERE idLugar='$id'");
$var_resultado = $obj_conexion->query($var_consulta);
 
 header("Location:mensaje2.php");
?>