<?php
    interface IUsuarioDao {

        public function crearUsuario($usuario);
        
        public function loginUsuario($login);

        public function obtenerUsuarios($rol);
    }
?>