<?php

require_once 'carroceria.php';
require_once 'chasis.php';
require_once 'motor.php';
class Vehiculo {
    protected $id;
    protected $tipo;
    protected $carroceria;
    protected $chasis;
    protected $motor;
    protected $carga;
    protected $mantenimiento;
    protected $cargaMaxima;

    
    public function __construct($id, $cargaMaxima) {
        $this->id = $id;
        $this->cargaMaxima = $cargaMaxima;
        $this->carroceria = new Carroceria($id);
        $this->chasis = new Chasis($id);
        $this->motor = new Motor($id);
        $this->mantenimiento = false;
        $this->carga = 0;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function getCarga() {
        return $this->carga;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function descripcion() {
        return "Vehículo ID: {$this->id}, Tipo: {$this->tipo}, Carga: {$this->carga} kg, Carga Maxima: {$this->cargaMaxima} kg";
    }

    public function comenzarMantenimiento() {
        $this->mantenimiento = true;
    }

    public function terminarMantenimiento() {
        $this->mantenimiento = false;
    }

    public function getCarroceria()
    {
        return $this->carroceria;
    }
    public function getChasis()
    {
        return $this->chasis;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function cargar($nuevaCarga)
    {
        if ($this->carga + $nuevaCarga > $this->cargaMaxima){
            return  "No se puede cargar, sobrepasa la carga maxima del vehiculo";
        }else{
            $this->carga = $this->carga + $nuevaCarga;
            return  "Carga exitosa";
        }
    }
   
    public function descargar()
    {
        $this->carga = 0;
    }

}

?>
