<?php

class Vehiculo {
    protected $id;
    protected $capacidad;
    protected $tipo;
    
    public function __construct($id, $capacidad, $tipo) {
        $this->id = $id;
        $this->capacidad = $capacidad;
        $this->tipo = $tipo;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getCapacidad() {
        return $this->capacidad;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function descripcion() {
        return "Vehículo ID: {$this->id}, Tipo: {$this->tipo}, Capacidad: {$this->capacidad} kg";
    }
}

?>
