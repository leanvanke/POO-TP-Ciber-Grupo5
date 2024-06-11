<?php


class Utilitario extends Vehiculo {

    public function __construct($id, $capacidad) {
        parent::__construct($id, $capacidad);
        $this->tipo="Utilitario";
    }

    public function navegarAreasUrbanas() {
        return "Hacer navegarAreasUrbanas"; //Falta Definir
    }

}

?>
