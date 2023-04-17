<!DOCTYPE html>
<html>
<head>
	<title>Crear Plato</title>
</head>
<body>
    <?php
		require_once('../Controller/UsuarioController.php');
		UsuarioController::validarUsuario('propietario', 'Location: login.php');
	?>
	<h1>Crear Plato</h1>
	<form method="POST" action="../Helpers/PlatoHelper.php">
		
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>

		<label for="precio">Precio:</label>
		<input type="number" id="precio" name="precio" required><br><br>

		<label for="descripcion">Descripción:</label>
		<textarea id="descripcion" name="descripcion"></textarea><br><br>

		<label for="urlImagen">URL de la imagen:</label>
		<input type="text" id="urlImagen" name="urlImagen"><br><br>

		<label for="categoria">Categoría:</label>
		<input type="text" id="categoria" name="categoria"><br><br>

		<label for="activo">Activo:</label>
		<input type="checkbox" id="activo" name="activo" checked><br><br>

		<label for="idRestaurante">Restaurante:</label>
		<select id="idRestaurante" name="idRestaurante">
			<option value="">Seleccione un restaurnate</option>
            <?php
				require_once('../Controller/RestauranteController.php');

				$restauranteCt = new RestauranteController();
				$res = $restauranteCt->obtenerRestaurantesPropietario($_SESSION['usuario_id']);

				while ($fila = $res->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["NombreRestaurante"] . " " . $fila["NIT"] . "</option>";
				}
			?>
		</select><br><br>

		<input type="submit" value="Crear Plato">
	</form>
</body>
</html>
