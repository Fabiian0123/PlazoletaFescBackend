<?php
    class RestauranteModel {
        
        private $id;
        private $nombre;
        private $nit;
        private $direccion;
        private $telefono;
        private $urlLogo;
        private $idPropietario;

        public function __construct($id, $nombre, $nit, $direccion, $telefono, $urlLogo, $idPropietario) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->nit = $nit;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->urlLogo = $urlLogo;
            $this->idPropietario = $idPropietario;
        }

        // Getters y setters
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getNit() {
            return $this->nit;
        }

        public function setNit($nit) {
            $this->nit = $nit;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        public function getUrlLogo() {
            return $this->urlLogo;
        }

        public function setUrlLogo($urlLogo) {
            $this->urlLogo = $urlLogo;
        }

        public function getIdPropietario() {
            return $this->idPropietario;
        }

        public function setIdPropietario($idPropietario) {
            $this->idPropietario = $idPropietario;
        }
    }
    
?>