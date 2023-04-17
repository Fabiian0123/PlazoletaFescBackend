<?php
    class PlatoModel {

        private $id;
        private $nombre;
        private $precio;
        private $descripcion;
        private $urlImagen;
        private $categoria;
        private $activo;
        private $idRestaurante;
        
        public function __construct($id, $nombre, $precio, $descripcion, $urlImagen, $categoria, $activo, $idRestaurante) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
            $this->urlImagen = $urlImagen;
            $this->categoria = $categoria;
            $this->activo = $activo;
            $this->idRestaurante = $idRestaurante;
        }
        
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
        
        public function getPrecio() {
            return $this->precio;
        }
        
        public function setPrecio($precio) {
            $this->precio = $precio;
        }
        
        public function getDescripcion() {
            return $this->descripcion;
        }
        
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
        
        public function getUrlImagen() {
            return $this->urlImagen;
        }
        
        public function setUrlImagen($urlImagen) {
            $this->urlImagen = $urlImagen;
        }
        
        public function getCategoria() {
            return $this->categoria;
        }
        
        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }
        
        public function getActivo() {
            return $this->activo;
        }
        
        public function setActivo($activo) {
            $this->activo = $activo;
        }
        
        public function getIdRestaurante() {
            return $this->idRestaurante;
        }
        
        public function setIdRestaurante($idRestaurante) {
            $this->idRestaurante = $idRestaurante;
        }
    }
    
?>