<!DOCTYPE html>
<html lang="">
	<head>
		
		<link type="text/css" href="estilo.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<?php require("model/conexion.php");
	$idl=$_GET['id'];
	$conectar = mysqli_connect("localhost", "root", "", "login");
	$consulta= "SELECT * FROM lugares WHERE idLugar='$idl'";
	$_idlugar['ipl']=$idl;
	$datos =mysqli_query($conectar, $consulta) ?>
	<body background=" fondo3.jpg">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<row class="row">
				<?php while ($registros = mysqli_fetch_array($datos)) { ?>
				<form action="subir2.php" method="POST" role="form">
					<legend><font size="10" face="Arial Black" color="00cc99">MODIFICACION</font></legend>
					
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='idpeli' value='".$registros['idLugar']."' placeholder='Nombre del lugar'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='nombre' value='".$registros['nombre']."' placeholder='Nombre de pelicula'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='genero' value='".$registros['dias']."' placeholder='Genero de la pelicula'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='precio' value='".$registros['precio']."' placeholder='Precio'>"; }?>
					</div>
					<button type="submit" class="btn btn-primary pull-right">GUARDAR CAMBIOS &raquo;</button>
				</form>
			</row>
		</div>
	</body>
</html>