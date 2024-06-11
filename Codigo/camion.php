<?php

class Camion extends Vehiculo {
    private $acoplado;

    public function __construct($id, $capacidad) {
        parent::__construct($id, $capacidad);
        $this->tipo="Camión";
        $this->acoplado= new Acoplado();
    }

}
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

class CamionRefrigerante extends Camion {
    
    private $sistemaDeRefrigeracion;

    public function __construct($id, $capacidad) {
        parent::__construct($id, $capacidad);
        $this->tipo = "Camión Refrigerante";
        $this->sistemaDeRefrigeracion = new SistemaDeRefrigeracion();
    }

    public function getTemperatura(){
        return $this->sistemaDeRefrigeracion->getTemperatura();
    }

    public function setTemperatura($temperatura){
        return $this->sistemaDeRefrigeracion->setTemperatura($temperatura);
    }

    public function descripcion() {
        return parent::descripcion() . ", Temperatura: {$this->getTemperatura()}";
    }

}


class SistemaDeRefrigeracion {
    
    private $temperatura = 0;

    public function getTemperatura()
    {
        return $this->temperatura;
    }
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;
    }
}

?>
