<?php

    require_once('IUsuarioDao.php');
    require_once('../Config/Conexion.php');
    require_once('../Models/UsuarioModel.php');

    class UsuarioDao implements IUsuarioDao{


        private $conexion;

        public function __construct() {
            $this->conexion = Conexion::obtenerConexion();
        }

        public function crearUsuario($usuario) {

            $sql = "INSERT INTO usuario (nombre, apellido, DocumentoDeIdentidad, celular, correo, clave, rol) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexion->prepare($sql);
            
            $nombre = $usuario->getNombre();
            $apellido = $usuario->getApellido();
            $documento = $usuario->getDocumentoIdentidad();
            $celular = $usuario->getCelular();
            $correo = $usuario->getCorreo();
            $clave = $usuario->getClave();
            $rol = $usuario->getRol();
          
            $stmt->bind_param("ssissss", $nombre, $apellido, $documento, $celular, $correo, $clave, $rol);

            $res = null;

            if ($stmt->execute()) {
                $res = true;
            } else {
                $res = false; // mysqli_error($conexion)
            }

            $stmt->close();
            $this->conexion->close();

            return $res;
        }

        public function loginUsuario($login) {

            $correo = $login->getCorreo();
            $rol = $login->getRol();

            $sql = "SELECT * FROM usuario WHERE correo='$correo' AND rol='$rol'";
	
            $resultado = $this->conexion->query($sql);
        
            $this->conexion->close();

            return $resultado->fetch_assoc();
        }

        public function obtenerUsuarios($rol) {

            $sql = "SELECT id, nombre, apellido FROM usuario WHERE rol = ?;";
            $stmt = $this->conexion->prepare($sql);

            $stmt->bind_param("s", $rol);

            $res = null;

            if ($stmt->execute()) {
                $res = $stmt->get_result();
            }

            $stmt->close();
            $this->conexion->close();

            return $res;
        }
    }
?>