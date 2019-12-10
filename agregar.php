<!DOCTYPE html>
<html lang="">
	<head>
		
		<link type="text/css" href="estilo.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		
	</head>
	<body background="fondo3.jpg">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			
		</div>
		<header>
			<li><a href="Inicio.html">Atras</a></li>

		</header>
		<div class="col-md-4">
			<row class="row">
				<form action="subir.php" method="POST" role="form">
					<legend><font size="10" face="Arial Black" color="00cc99">REGISTRO DE LUGARES</font></legend>
								
					<div class="form-group">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre de lugar">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="genero" placeholder="Dias de viaje">
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="precio" placeholder="Precio">
					</div>
					<button type="submit" class="btn btn-primary pull-right">GUARDAR &raquo;</button>
				</form>
			</row>
			<hr>
			<row class="row">
				<?php require ("conexion1.php");
					$var_consulta= "SELECT * FROM lugares ";
					$var_resultado = $obj_conexion->query($var_consulta);
					?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th><font size="5" face="Browallia New" color="00cc99">ID LUGAR</font></th>
							<th><font size="5" face="Browallia New" color="00cc99">NOMBRE</font></th>
							<th><font size="5" face="Browallia New" color="00cc99">PRECIO</font></th>
						</tr>
					</thead>
					<tbody>
						<?php while ($var_fila=$var_resultado->fetch_array()) { ?>
						<tr>
							<td><font size="3" face="Arial Narrow" color="00ccff"><?php echo $var_fila['idLugar']; ?></font></td>
							<td><font size="3" face="Arial Narrow" color="00ccff"><?php echo $var_fila['nombre']; ?></font></td>
							<td><font size="3" face="Arial Narrow" color="00ccff"><?php echo $var_fila['precio']; ?></font></td>
							<td><?php echo"<a href='modificar.php?id=".$var_fila['idLugar']."'>modificar</a>"; ?><br><?php echo"<a href='baja.php?id=".$var_fila['idLugar']."'>eliminar</a>"; ?></td>
						</tr><?php } ?>
					</tbody>
				</table>
			</row>
		</div>
	</body>
</html>