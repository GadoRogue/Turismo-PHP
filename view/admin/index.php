<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    
    header('location: ../../index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    Hola administrador <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="../../controller/cerrarSesion.php">
     <button type="button" name="button">Cerrar sesion</button>
    </a>
     <a href="../../Inicio.html">
     <button type="button" name="button">Ingresar a la pagina</button>
    </a>
    <a href="../../ventas_pdo/index.php">
     <button type="button" name="button">Ver las ventas realizadas</button>
    </a>
  </body>
</html>
