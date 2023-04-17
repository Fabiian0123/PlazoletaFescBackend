<!DOCTYPE html>
<html>
<head>
	<title>Página de Inicio</title>
</head>
<body>
	<h1>Bienvenido a la Página de Inicio</h1>

	<?php
	session_start();
	
	if (!isset($_SESSION["usuario_id"]) || !isset($_SESSION["usuario_nombre"]) || !isset($_SESSION["usuario_rol"])) {
		echo "<p>Debe iniciar sesión para ver esta página. <a href='login.html'>Iniciar Sesión</a></p>";
		exit();
	}

	if ($_SESSION["usuario_rol"] == "usuario") {

		echo "<p>Este contenido solo es visible para usuarios.</p>";

	} elseif ($_SESSION["usuario_rol"] == "empleado") {

		echo "<p>Este contenido solo es visible para empleados.</p>";

	} elseif ($_SESSION["usuario_rol"] == "propietario") {

		echo "<p>Este contenido solo es visible para propietarios.</p><br>";
		echo "<a href='./crearPlato.php'>Crear plato.</a><br>";
		echo "<a href='./modificarPlato.php'>Modificar plato.</a><br>";
		echo "<a href='./crearEmpleado.php'>Crear empleado.</a><br>";

	} elseif ($_SESSION["usuario_rol"] == "administrador") {

		echo "<p>Este contenido solo es visible para administradores.</p><br>";
		echo "<a href='./crearPropietario.php'>Crear propietario.</a><br>";
		echo "<a href='./crearRestaurante.php'>Crear restaurante.</a><br>";
	}
	?>

	<p><a href="../Controller/logout.php">Cerrar Sesión</a></p>
</body>
</html>
