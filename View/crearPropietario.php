<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Crear Propietario</title>
</head>
<body>
  <?php
    require_once('../Controller/UsuarioController.php');
		UsuarioController::validarUsuario('administrador', 'Location: login.php');
  ?>
  <h1>Crear Propietario</h1>
  <form action="../Helpers/UsuarioHelper.php" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"><br>

    <label for="documento">Documento de Identidad:</label>
    <input type="text" id="documento" name="documento"><br>

    <label for="celular">Celular:</label>
    <input type="text" id="celular" name="celular"><br>

    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="correo"><br>

		<input type="text" hidden id="rolCrear" name="rolCrear" value="propietario">
    
    <input type="submit" value="Crear Propietario">
  </form>
</body>
</html>
