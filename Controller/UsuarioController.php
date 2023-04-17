<?php

require_once('../Daos/UsuarioDao.php');
require_once('../Models/UsuarioModel.php');

 class UsuarioController {

    private $usuarioDao;

    public function __construct() {

        $this->usuarioDao = new UsuarioDao();
    }

	public function crearUsuario($usuario) {

        $clave = $usuario->getClave() ? $usuario->getClave() : $usuario->getDocumentoIdentidad();

		$usuario->setClave(password_hash($clave, PASSWORD_DEFAULT));

        if($this->usuarioDao->crearUsuario($usuario)) {

            $url = $usuario->getRol == 'usuario' ? 'Location: ../View/login.php' : 'Location: ../View/index.php' ;
            header($url);
			exit();
        } else {
            echo "error";
        }
	}

    public function loginUsuario($login) {

        $usuarioAssoc = $this->usuarioDao->loginUsuario($login);

        if ($usuarioAssoc && password_verify($login->getClave(), $usuarioAssoc['Clave'])) {

            session_start();
    
            $_SESSION["usuario_id"] = $usuarioAssoc["id"];
            $_SESSION["usuario_nombre"] = $usuarioAssoc["Nombre"];
            $_SESSION["usuario_rol"] = $usuarioAssoc["Rol"];
    
            header("Location: ../View/index.php");
            exit();
    
        } else {
            echo "El usuario no existe o no tiene el rol especificado.";
        }
	}

    public function obtenerUsuarios($rol) {

		return $this->usuarioDao->obtenerUsuarios($rol);
	}

    public static function validarUsuario($rol, $url) {

        session_start();

		if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== $rol) {
			header($url); // 'Location: ../View/login.php'
			exit();
		}
    }
 }
?>
