<?php
    require "Loggable.php";
    class Producto
    {
        use Loggable; // Usa el trait Loggable

        private $nombre;
        private $precio;

        public function __construct($nombre, $precio) {
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function setPrecio($precio) {
            $this->log("Se ha modificado el precio de '{$this->nombre}' a $precio </br>");
            $this->precio = $precio;
        }

        public function getPrecio() {
            return $this->precio;
        }
    }
?>
