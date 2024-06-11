<?php


class AlmacenCentral {

    private $productos = [];
    private $gerente;
    private $rutas = [];
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
    public function addProducto($producto){
        $this->productos[] = $producto;
    }
    public function getRutas(){
        return $this->rutas;
    }
    public function addRutas($ruta){
        $this->rutas[] = $ruta;
    }
}

?>
