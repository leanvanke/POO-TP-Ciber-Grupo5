<?php

class Empresa {
    private $flota = [];
    private $nombre;
    private $almacen;
    
    public function __construct($nombre) {
        $this->nombre=$nombre;
    }
    public function agregarVehiculo(Vehiculo $vehiculo) {
        $this->flota[] = $vehiculo;
    }
    
    public function obtenerflota() {
        return $this->flota;
    }
    
    public function descripcion() {
        $descripcion = "Gerente: {$this->almacen->getManager()->getNombre()}\nFlota de vehículos:\n";
        foreach ($this->flota as $vehiculo) {
            $descripcion .= $vehiculo->descripcion() . "\n";
        }
        return $descripcion;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function setAlmacen($almacen)
    {
        $this->almacen = $almacen;
    }

    public function getAlmacen()
    {
        return $this->almacen;
    }


}

?>
