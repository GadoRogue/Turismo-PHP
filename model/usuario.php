<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
    
      # Nos conectamos a la base de datos
      parent::conectar();

      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);
      /*$user  = parent::filtrar($user);
      $clave = parent::filtrar($clave);*/

      
      $consulta = 'select id, nombre, cargo from usuarios where email="'.$user.'" and clave= MD5("'.$clave.'")';

      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        /* Bien ahora a jugar un poco :v */

        $user = parent::consultaArreglo($consulta);

        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['cargo']  = $user['cargo'];

        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }


      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      // validar que el correo no exito
      $verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuarios(nombre, email, clave, cargo) values("'.$name.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['cargo']  = 2;

        echo 'view/user/index.php';

      }

      parent::cerrar();
    }

  }


?>
