<?php
  $servidor  = "localhost";
  $usuario   = "root";
  $password  = "";
  $db        = "login";
  $conexion  = mysql_connect($servidor, $usuario, $password, $db) or die ("Error No se podido establecer la coneccion a MySQL");
  mysql_select_db ("login") or die ("Error No se ha podido encontrar la Base de Datos Videoclub");
?>