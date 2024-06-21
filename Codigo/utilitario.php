<?php


class Utilitario extends Vehiculo {

    public function __construct($id) {
        parent::__construct($id);
        $this->tipo="Utilitario";
        $this->cargaMaxima=1000;
    }

    public function setRuta($ruta)
    {
        if (!$ruta->esUrbana()){
            return  "No se puede cargar ruta, Utilitario solo recorre rutas urbanas";
        }else{
            $this->ruta = $ruta;
        }
    }

}

?>
