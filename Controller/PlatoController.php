<?php

require_once('../Daos/PlatoDao.php');
require_once('../Models/PlatoModel.php');
require_once('UsuarioController.php');

 class PlatoController {

    private $platoDao;

    public function __construct() {

        $this->platoDao = new PlatoDao();
    }

	public function crearPlato($plato) {

		UsuarioController::validarUsuario('propietario', 'Location: ../View/login.php');

		$plato->setActivo($plato->getActivo() ? 1: 0);

		$res = $this->platoDao->crearPlato($plato);

        return $res;
	}

	public function modificarPlato($plato) {

		UsuarioController::validarUsuario('propietario', 'Location: ../View/login.php');

		$plato->setActivo($plato->getActivo() ? 1: 0);
		$res = $this->platoDao->modificarPlato($plato);

        return $res;
	}

	public function obtenerPlatoPropietario($id) {

		return $this->platoDao->obtenerPlatoPropietario($id);
	}
 }
?>
