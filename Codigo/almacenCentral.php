<?php


class AlmacenCentral {

    private $productos = [];
    private $gerente;
    private $rutas = [];
    private $flota;
    
    public function __construct($gerente) {
        $this->gerente = $gerente;
    }

    public function getManager(){
        return $this->gerente;
    }
    public function setManager($gerente){
        $this->gerente = $gerente;
    }
    public function getProductos(){
        return $this->productos;

    }
    public function setProductos($productos){
        $this->productos[] = $productos;
    }
    public function getRutas(){
        return $this->rutas;
    }
    public function setRutas($rutas){
        $this->rutas[] = $rutas;
    }
    public function getFlota()
    {
        return $this->flota;
    }
    public function setFlota($flota)
    {
        $this->flota = $flota;

        return $this;
    }

    public function descripcion()
    {
        return "Gerente: " . $this->gerente->getNombre() . "\n" . $this->flota->descripcion();
    }
}

?>
