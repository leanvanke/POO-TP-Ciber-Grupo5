<?php

class Vehiculo {
    protected $id;
    protected $capacidad;
    protected $tipo;
    protected $empresa;
    
    public function __construct($id, $capacidad, $tipo, $empresa) {
        $this->id = $id;
        $this->capacidad = $capacidad;
        $this->tipo = $tipo;
        $this->empresa = $empresa;
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
        return "Vehículo ID: {$this->id}, Tipo: {$this->tipo}, Capacidad: {$this->capacidad} kg, Empresa: {$this->empresa}";
    }

    public function mantenimiento() {
        return "Hacer Mantenimiento"; //Falta Definir
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }
}

?>
