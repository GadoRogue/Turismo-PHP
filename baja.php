<!DOCTYPE html>
<html lang="">
	<head>

		<link type="text/css" href="estilo.css" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		

		
	</head>
	<body background=" fondo3.jpg">

<?php 
require("model/conexion.php");
$idl=$_GET['id'];
$consulta="DELETE FROM peliculas WHERE IdLugar = '$idl'";
$conectar = mysqli_connect("localhost", "root", "", "login");
$terminado=mysqli_query($conectar, $consulta);
 echo"Elimnado"; ?>

 ?>
 <pre><font align="center" size="6" >ELIMINADO</font></pre>
 <pre><a href='agregar.php'>VOLVER AL INICIO</a></pre>
 </body>
</html>