<?php


class Utilitario extends Vehiculo {

    public function __construct($id, $capacidad,$empresa) {
        $this->id = $id;
        $this->capacidad = $capacidad;
        $this->tipo = "Utilitario";
        $this->empresa = $empresa;
    }

    public function navegarAreasUrbanas() {
        return "Hacer navegarAreasUrbanas"; //Falta Definir
    }

}

?>
