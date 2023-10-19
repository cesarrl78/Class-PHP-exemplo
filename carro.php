<?php

    class Carro
    {
        private $marca;

        public function __construct($marca)
        {
            $this->marca = $marca;
        }

        public function getMarca()
        {
            return $this->marca;
        }

        public function displayInfo()
        {
            echo "Marca: " . $this->getMarca() . " . ";
        }
    }

    ?>