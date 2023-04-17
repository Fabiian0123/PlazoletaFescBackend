<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
</head>
<body>
	<h1>Iniciar Sesión</h1>
	<form action="../Helpers/UsuarioHelper.php" method="POST">
		<label for="correo">Correo:</label>
		<input type="email" id="correo" name="correo"><br>

		<label for="clave">Clave:</label>
		<input type="password" id="clave" name="clave"><br>

		<label for="rol">Rol:</label>
		<select id="rolLog" name="rolLog">
			<option value="usuario">Usuario</option>
			<option value="empleado">Empleado</option>
			<option value="propietario">Propietario</option>
			<option value="administrador">Administrador</option>
		</select><br>

		<input type="submit" value="Iniciar Sesión">
	</form>
</body>
</html>