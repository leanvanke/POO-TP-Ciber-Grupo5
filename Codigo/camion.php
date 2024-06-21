<?php

class Camion extends Vehiculo {
    private $acoplado;

    public function __construct($id) {
        parent::__construct($id);
        $this->tipo="Camión";
        $this->acoplado= new Acoplado();
        $this->cargaMaxima=2000;
    }

    public function acoplar()
    {
            $this->acoplado->agregar();
    }

    public function desacoplar()
    {
            $this->acoplado->quitar();
    }

}
    class Acoplado {
        private $estadoAcoplado = false;
        public function getEstado()
        {
                return $this->estadoAcoplado;
        }

        public function agregar()
        {
                $this->estadoAcoplado = true;
        }

        public function quitar()
        {
                $this->estadoAcoplado = false;
        }

        
    }

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
            return  "No se puede cargar, sobrepasa la carga maxima del vehiculo";
        }else{
            $this->carga = $this->carga + $nuevaCarga->getPeso();
            $this->productos[] = $nuevaCarga;
            return  "Carga exitosa";
        }
    }

}


class SistemaDeRefrigeracion {
    
    private $temperatura = 24;

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
