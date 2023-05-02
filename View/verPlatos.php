<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver platos</title>
    <link rel="icon" type="image/x-icon" href="public/assets/iconoFesc.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/style/estiloDashBoardPropietario.css">
</head>

<body>

    <a href="index.php?controller=Usuario&action=lista">Volver</a>
	<div class="jumbotron py-5 text-center mt-5 mb-5"></div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
					<div>
					<?php
						if(is_array($dataToView['data']) && count($dataToView["data"]) > 0){
							foreach($dataToView["data"] as $plato){
					?>
					</div>

                	<?php 
						if($plato['Activo'] == 1) {
					?>

					<h5 class="card-title text-center fs-3"><?php echo $plato['NombrePlato']; ?></h5>
					<p class="card-text text-center"><?php echo $plato['Precio']; ?></p>
					<p class="card-text text-center"><?php echo $plato['Descripcion']; ?></p>

                <?php }?>

				<?php
						}
					}else{
				?>
						<p>Actualmente no existen platos.</p>
				<?php
					}
				?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>