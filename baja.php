<!DOCTYPE html>
<html lang="">
	<head>

		<link type="text/css" href="estilo.css" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		

		
	</head>
	<body background=" fondo3.jpg">

<?php 
require("conexion1.php");
$idp=$_GET['id'];

	$var_consulta= "DELETE FROM lugares WHERE idLugar = '$idp'";
	$var_resultado = $obj_conexion->query($var_consulta);
 echo"Elimnado"; ?>

 ?>
 <pre><font align="center" size="6" >ELIMINADO</font></pre>
 <pre><a href='agregar.php'>VOLVER AL INICIO</a></pre>
 </body>
</html>