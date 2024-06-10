<?php

class Camion extends Vehiculo {
    
    public function __construct($id, $capacidad,$empresa) {
        $this->id = $id;
        $this->capacidad = $capacidad;
        $this->tipo = "Camión";
        $this->empresa = $empresa;
    }

    public function cargarCargaPesada() {
        return "Hacer cargarCargaPesada"; //Falta Definir
    }

}


class CamionRefrigerante extends Vehiculo {
    
    protected $sistemaDeRefrigeracion;

    public function __construct($id, $capacidad,$empresa) {
        $this->id = $id;
        $this->capacidad = $capacidad;
        $this->tipo = "Camión Refrigereante";
        $this->empresa = $empresa;
        
        $this->sistemaDeRefrigeracion = new SistemaDeRefrigeracion();
    }

    public function getTemperatura(){
        return $this->sistemaDeRefrigeracion->getTemperatura();
    }

    public function setTemperatura($temperatura){
        return $this->sistemaDeRefrigeracion->setTemperatura($temperatura);
    }

    public function descripcion() {
        return "Vehículo ID: {$this->id}, Tipo: {$this->tipo}, Capacidad: {$this->capacidad} kg, Temperatura: {$this->getTemperatura()}";
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
