<?php
class Acoplado {
        private $estadoAcoplado = false;
        public function getEstado()
        {
                return $this->estadoAcoplado;
        }

        public function agregar()
        {
                $this->estadoAcoplado = true;
        }

        public function quitar()
        {
                $this->estadoAcoplado = false;
        }

        
    }