<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
  </head>
  <body>
    Hola usuario estandar <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
      <a href="../../Inicio.html">
     <button type="button" name="button">Ingresar a la pagina</button>
    </a>
  </body>
</html>
