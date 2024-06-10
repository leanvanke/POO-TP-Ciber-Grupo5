<?php

class Camion extends Vehiculo {
    
    public function __construct($id, $capacidad,$empresa) {
        parent::__construct($id, $capacidad,"Camión",$empresa);
    }

    public function cargarCargaPesada() {
        return "Hacer cargarCargaPesada"; //Falta Definir
    }

}


class CamionRefrigerante extends Camion {
    
    protected $sistemaDeRefrigeracion;

    public function __construct($id, $capacidad, $empresa) {
        parent::__construct($id, $capacidad, $empresa);
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
