<?php

require_once 'sistemaDeRefrigeracion.php';
class CamionRefrigerante extends Camion {
    
    private $sistemaDeRefrigeracion;

    public function __construct($id) {
        parent::__construct($id);
        $this->tipo = "Camión Refrigerante";
        $this->sistemaDeRefrigeracion = new SistemaDeRefrigeracion();
    }

    public function getTemperatura(){
        return $this->sistemaDeRefrigeracion->getTemperatura();
    }

    public function setTemperatura($temperatura){
        $this->sistemaDeRefrigeracion->setTemperatura($temperatura);
    }

    public function descripcion() {
        return parent::descripcion() . ", Temperatura: {$this->getTemperatura()}";
    }

    public function cargar($nuevaCarga)
    {

        if ($this->carga + $nuevaCarga->getPeso() > $this->cargaMaxima){
            throw new Exception("No se puede cargar, sobrepasa la carga maxima del vehiculo");
        }else{
            $this->carga = $this->carga + $nuevaCarga->getPeso();
            $this->productos[] = $nuevaCarga;
        }
    }

}