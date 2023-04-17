<?php

    require_once('IPlatoDao.php');
    require_once('../Config/Conexion.php');
    require_once('../Models/PlatoModel.php');

    class PlatoDao implements IPlatoDao{


        private $conexion;

        public function __construct() {
            $this->conexion = Conexion::obtenerConexion();
        }

        public function crearPlato($plato) {

            $sql = 'INSERT INTO plato (nombrePlato, precio, descripcion, urlImagen, categoria, activo, idRestaurante) VALUES (?, ?, ?, ?, ?, ?, ?)';
            $stmt = $this->conexion->prepare($sql);
            
            $nombre = $plato->getNombre();
            $precio = $plato->getPrecio();
            $descripcion = $plato->getDescripcion();
            $urlImagen = $plato->getUrlImagen();
            $categoria = $plato->getCategoria();
            $activo = $plato->getActivo();
            $idRestaurante = $plato->getIdRestaurante();

            $stmt->bind_param("sisssii", $nombre, $precio, $descripcion, $urlImagen, $categoria, $activo, $idRestaurante);

            $res = null;

            if ($stmt->execute()) {
                $res = true;
            } else {
                $res = false;
            }

            $stmt->close();
            $this->conexion->close();

            return $res;
        }

        public function modificarPlato($plato) {

            $id = $plato->getId();
            $precio = $plato->getPrecio();
            $descripcion = $plato->getDescripcion();
            $activo = $plato->getActivo();

            $sql = "UPDATE plato SET precio = ?, descripcion = ?, activo = ? WHERE id = ?";
            $stmt = $this->conexion->prepare($sql);

            $stmt->bind_param("isii", $precio, $descripcion, $activo, $id);

            $res = null;

            if ($stmt->execute()) {
                $res = true;
            } else {
                $res = false;
            }

            $stmt->close();
            $this->conexion->close();

            return $res;
        } // SELECT p.id, p.Nombre, p.Precio, r.Nombre FROM `plato` p INNER JOIN restaurante r ON p.idRestaurante = r.id INNER JOIN usuario u ON r.idPropietario = u.id AND u.Rol = 'propietario'

        public function obtenerPlatoPropietario($id) {

            $sql = "SELECT plato.id, plato.NombrePlato, plato.Precio, restaurante.NombreRestaurante FROM `plato` INNER JOIN restaurante ON plato.idRestaurante = restaurante.id INNER JOIN usuario ON restaurante.idPropietario = usuario.id AND usuario.Rol = 'propietario' WHERE usuario.id = ?;";
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