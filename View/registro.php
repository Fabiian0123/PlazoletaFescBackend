<!DOCTYPE html>
<html>
<head>
	<title>Registro de Usuario</title>
</head>
<body>
	<h1>Registro de Usuario</h1>
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
		<input type="email" id="correo" name="correo"><br>

		<label for="clave">Clave:</label>
		<input type="password" id="clave" name="clave"><br>

		<input type="text" hidden id="rolCrear" name="rolCrear" value="usuario">

		<input type="submit" value="Registrarse">
	</form>
</body>
</html>
