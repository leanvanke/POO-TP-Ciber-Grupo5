<?php


class Utilitario extends Vehiculo {

    public function __construct($id, $capacidad,$empresa) {
        parent::__construct($id, $capacidad,"Utilitario",$empresa);
    }

    public function navegarAreasUrbanas() {
        return "Hacer navegarAreasUrbanas"; //Falta Definir
    }

}

?>
