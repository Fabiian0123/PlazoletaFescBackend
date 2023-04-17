<?php
    class UsuarioModel {

        private $id;
        private $nombre;
        private $apellido;
        private $documentoIdentidad;
        private $celular;
        private $correo;
        private $clave;
        private $rol;
      
        public function __construct($id, $nombre, $apellido, $documentoIdentidad, $celular, $correo, $clave, $rol) {
          $this->id = $id;
          $this->nombre = $nombre;
          $this->apellido = $apellido;
          $this->documentoIdentidad = $documentoIdentidad;
          $this->celular = $celular;
          $this->correo = $correo;
          $this->clave = $clave;
          $this->rol = $rol;
        }
      
        public function getId() {
          return $this->id;
        }
      
        public function getNombre() {
          return $this->nombre;
        }
      
        public function getApellido() {
          return $this->apellido;
        }
      
        public function getDocumentoIdentidad() {
          return $this->documentoIdentidad;
        }
      
        public function getCelular() {
          return $this->celular;
        }
      
        public function getCorreo() {
          return $this->correo;
        }
      
        public function getClave() {
          return $this->clave;
        }
      
        public function getRol() {
          return $this->rol;
        }
      
        public function setId($id) {
          $this->id = $id;
        }
      
        public function setNombre($nombre) {
          $this->nombre = $nombre;
        }
      
        public function setApellido($apellido) {
          $this->apellido = $apellido;
        }
      
        public function setDocumentoIdentidad($documentoIdentidad) {
          $this->documentoIdentidad = $documentoIdentidad;
        }
      
        public function setCelular($celular) {
          $this->celular = $celular;
        }
      
        public function setCorreo($correo) {
          $this->correo = $correo;
        }
      
        public function setClave($clave) {
          $this->clave = $clave;
        }
      
        public function setRol($rol) {
          $this->rol = $rol;
        }
      }
      
?>