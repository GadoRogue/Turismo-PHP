<!DOCTYPE html>
<html lang="">
	<head>
		
		<link type="text/css" href="estilo.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<?php require("conexion1.php");
	$idp=$_GET['id'];
	$_idlugar['ipd']=$idp;
	
	$var_consulta= "SELECT * FROM lugares WHERE idLugar='$idp'";
    $var_resultado = $obj_conexion->query($var_consulta);
	?>
	<body background=" fondo3.jpg">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<row class="row">
				<?php while ($var_fila=$var_resultado->fetch_array()) { ?>
				<form action="subir2.php" method="POST" role="form">
					<legend><font size="10" face="Arial Black" color="00cc99">MODIFICACION</font></legend>
					
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='idLugar' value='".$var_fila['idLugar']."' placeholder='Nombre del lugar'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='nombre' value='".$var_fila['nombre']."' placeholder='Nombre de pelicula'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='dias' value='".$var_fila['dias']."' placeholder='dias'>"; ?>
					</div>
					<div class="form-group">
						<?php echo"<input type='text' class='form-control' name='precio' value='".$var_fila['precio']."' placeholder='Precio'>"; }?>
					</div>
					<button type="submit" class="btn btn-primary pull-right">GUARDAR CAMBIOS &raquo;</button>
				</form>
			</row>
		</div>
	</body>
</html>