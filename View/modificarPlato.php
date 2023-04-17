<!DOCTYPE html>
<html>
<head>
	<title>Modificar Plato</title>
</head>
<body>
	<?php
		require_once('../Controller/UsuarioController.php');
		UsuarioController::validarUsuario('propietario', 'Location: login.php');
	?>
	<h1>Modificar Plato</h1>
	<form method="POST" action="../Helpers/PlatoHelper.php">

        <label for='id'>Plato:</label>
		<select id='id' name='id'>
		    <option value=''>Seleccione un plato</option>
				
			<?php
				require_once('../Controller/PlatoController.php');

				$platoCt = new PlatoController();
				$res = $platoCt->obtenerPlatoPropietario($_SESSION['usuario_id']);

				while ($fila = $res->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["NombrePlato"] . " " . $fila["Precio"] . " " . $fila["NombreRestaurante"]. "</option>";
				}
            ?>
				
		</select><br><br>

		<label for="precio">Precio:</label>
		<input type="number" name="precio" required><br><br>

		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion" required></textarea><br><br>

		<label for="activo">activo:</label>
		<input type="checkbox" checked name="activo" required><br><br>

		<input type="submit" value="Modificar">
	</form>
</body>
</html>
