<?php
    class LoginModel {

        private $correo;
        private $clave;
        private $rol;
      
        public function __construct($correo, $clave, $rol) {
          $this->correo = $correo;
          $this->clave = $clave;
          $this->rol = $rol;
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