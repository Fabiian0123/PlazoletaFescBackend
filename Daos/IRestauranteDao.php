<?php
    interface IRestauranteDao {

        public function crearRestaurante($restaurante);

        public function obtenerRestaurantesPropietario($id);
    }
?>