<?php

  require_once('../Controller/UsuarioController.php');
  require_once('../Models/UsuarioModel.php');
  require_once('../Models/LoginModel.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuarioCt = new UsuarioController();

    if (!empty($_POST['rolLog'])) {
      
      $login = new LoginModel(
        $_POST['correo'], 
        $_POST['clave'],
        $_POST['rolLog']
      );

      $usuarioCt->loginUsuario($login);

    } else {
      
      $usuario = new UsuarioModel(
        '', 
        $_POST['nombre'], 
        $_POST['apellido'], 
        $_POST['documento'], 
        $_POST['celular'], 
        $_POST['correo'], 
        $_POST['clave'],
        $_POST['rolCrear']
      );

      $usuarioCt->crearUsuario($usuario);
      }
  }
?>
