<?php

require_once('../Controller/PlatoController.php');
require_once('../Models/PlatoModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $platoCt = new PlatoController();

    if(empty($_POST['id'])) {

        $plato = new PlatoModel(
            '', 
            $_POST['nombre'], 
            $_POST['precio'], 
            $_POST['descripcion'], 
            $_POST['urlImagen'], 
            $_POST['categoria'], 
            $_POST['activo'],
            $_POST['idRestaurante']
        );

        $res = $platoCt->crearPlato($plato);
    
        echo $res;
    } else {

        $plato = new PlatoModel(
            $_POST['id'], 
            '', 
            $_POST['precio'], 
            $_POST['descripcion'], 
            '', 
            '', 
            $_POST['activo'],
            '', 
        );

        $res = $platoCt->modificarPlato($plato);

        echo $res;
    }

	
}
?>
