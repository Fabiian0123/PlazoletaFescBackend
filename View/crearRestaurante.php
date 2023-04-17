<!DOCTYPE html>
<html>
<head>
	<title>Crear Restaurante</title>
</head>
<body>
	<?php
		require_once('../Controller/UsuarioController.php');
		UsuarioController::validarUsuario('administrador', 'Location: login.php');
	?>
	<h1>Crear Restaurante</h1>
	<form action="../Helpers/RestauranteHelper.php" method="POST">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" required><br>

		<label for="nit">NIT:</label>
		<input type="number" name="nit" required><br>

		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion" required><br>

		<label for="telefono">Teléfono:</label>
		<input type="number" name="telefono" required><br>

		<label for="urlLogo">URL Logo:</label>
		<input type="text" name="urlLogo" required><br>

		<label for="propietario">Propietario:</label>
		<select name="idPropietario" required>
			<option value="">Seleccione un propietario</option>
			<?php
				require_once('../Controller/UsuarioController.php');

				$usuarioCt = new UsuarioController();
				$res = $usuarioCt->obtenerUsuarios('propietario');

				while ($fila = $res->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["nombre"] . " " . $fila["apellido"] . "</option>";
				}
			?>
		</select><br>

		<input type="submit" value="Crear">
	</form>
</body>
</html>
