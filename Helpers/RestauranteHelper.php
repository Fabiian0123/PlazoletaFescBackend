<?php

require_once('../Controller/RestauranteController.php');
require_once('../Models/RestauranteModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $restauranteCt = new RestauranteController();

    if(empty($_POST['id'])) {

        $restaurante = new RestauranteModel(
            '', 
            $_POST['nombre'], 
            $_POST['nit'], 
            $_POST['direccion'], 
            $_POST['telefono'], 
            $_POST['urlLogo'], 
            $_POST['idPropietario']
        );

        $res = $restauranteCt->crearRestaurante($restaurante);
    
        echo $res;
    } else {

        // $plato = new PlatoModel(
        //     $_POST['id'], 
        //     '', 
        //     $_POST['precio'], 
        //     $_POST['descripcion'], 
        //     '', 
        //     '', 
        //     $_POST['activo'],
        //     '', 
        // );

        // $res = $platoCt->modificarPlato($plato);

        // echo $res;
    }

	
}
?>
