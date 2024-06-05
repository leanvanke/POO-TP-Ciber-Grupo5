<?php

class Camion extends Vehiculo {
    private $sistemaRefrigeracion;
    
    public function __construct($id, $capacidad, $sistemaRefrigeracion) {
        parent::__construct($id, $capacidad, "Camión");
        $this->sistemaRefrigeracion = $sistemaRefrigeracion;
    }
    
    public function tieneRefrigeracion() {
        return $this->sistemaRefrigeracion;
    }
    
    public function descripcion() {
        $refrigeracion = $this->sistemaRefrigeracion ? "con" : "sin";
        return parent::descripcion() . ", Refrigeración: $refrigeracion sistema";
    }
}


?>
