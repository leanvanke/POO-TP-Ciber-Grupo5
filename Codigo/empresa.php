<?php

require_once 'almacenCentral.php';
class Empresa {
    private $flota = [];
    private $nombre;
    private $almacen;
    
    public function __construct($nombre) {
        $this->nombre=$nombre;
        $this->almacen = new AlmacenCentral();
    }
    public function agregarVehiculo($vehiculo) {
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
    
    public function getAlmacen()
    {
        return $this->almacen;
    }

    public function prestarVehiculo($id)
    {
        foreach ($this->flota as $key => $vehiculo) {
            if ($vehiculo->getId() == $id){
                $vehiculoPrestado = $vehiculo;
                unset($this->flota[$key]);
            } 
        }
        return $vehiculoPrestado;
    }


}

?>
