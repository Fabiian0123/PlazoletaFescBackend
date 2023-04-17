<?php
    interface IPlatoDao {

        public function crearPlato($plato);

        public function modificarPlato($plato);

        public function obtenerPlatoPropietario($id);
    }
?>