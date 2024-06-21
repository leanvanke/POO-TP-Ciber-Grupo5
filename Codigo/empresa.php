<?php

require_once 'almacenCentral.php';
require_once 'dptoMantenimiento.php';
class Empresa {
    private $flota = [];
    private $nombre;
    private $almacen;
    private $mantenimiento;
    
    public function __construct($nombre) {
        $this->nombre=$nombre;
        $this->almacen = new AlmacenCentral();
        $this->mantenimiento = new DptoMantenimiento();
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

    public function mantenimientoFlota()
    {
        $this->mantenimiento->mantenimiento($this->obtenerflota());
    }
}

?>
