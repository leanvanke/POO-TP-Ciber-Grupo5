<?php

class Flota {
    private $vehiculos = [];
    
    public function agregarVehiculo(Vehiculo $vehiculo) {
        $this->vehiculos[] = $vehiculo;
    }
    
    public function obtenerVehiculos() {
        return $this->vehiculos;
    }
    
    public function descripcion() {
        $descripcion = "Flota de vehículos:\n";
        foreach ($this->vehiculos as $vehiculo) {
            $descripcion .= $vehiculo->descripcion() . "\n";
        }
        return $descripcion;
    }
}

?>
