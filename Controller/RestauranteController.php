<?php

require_once('../Daos/RestauranteDao.php');
require_once('../Models/RestauranteModel.php');
require_once('UsuarioController.php');

 class RestauranteController {

    private $restauranteDao;

    public function __construct() {

        $this->restauranteDao = new RestauranteDao();
    }

	public function crearRestaurante($restaurante) {

		UsuarioController::validarUsuario('administrador', 'Location: ../View/login.php');

		$res = $this->restauranteDao->crearRestaurante($restaurante);

        return $res;
	}

    public function obtenerRestaurantesPropietario($id) {

		return $this->restauranteDao->obtenerRestaurantesPropietario($id);
	}
 }
?>
