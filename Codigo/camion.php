<?php

require_once 'acoplado.php';
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

?>
