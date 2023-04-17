<?php

    require_once('IRestauranteDao.php');
    require_once('../Config/Conexion.php');
    require_once('../Models/RestauranteModel.php');

    class RestauranteDao implements IRestauranteDao{


        private $conexion;

        public function __construct() {
            $this->conexion = Conexion::obtenerConexion();
        }

        public function crearRestaurante($restaurante) {

            $sql = "INSERT INTO restaurante (nombreRestaurante, nit, direccion, telefono, urlLogo, idPropietario) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conexion->prepare($sql);
            
            $nombre = $restaurante->getNombre();
            $nit = $restaurante->getNit();
            $direccion = $restaurante->getDireccion();
            $telefono = $restaurante->getTelefono();
            $urlLogo = $restaurante->getUrlLogo();
            $idPropietario = $restaurante->getIdPropietario();
          
            $stmt->bind_param("sisisi", $nombre, $nit, $direccion, $telefono, $urlLogo, $idPropietario);

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

        public function obtenerRestaurantesPropietario($id) {

            $sql = "SELECT id, NombreRestaurante, NIT FROM restaurante WHERE idPropietario = ?;";
            $stmt = $this->conexion->prepare($sql);

            $stmt->bind_param("s", $id);

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