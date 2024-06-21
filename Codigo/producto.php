<?php


class Producto {

    private $id;
    private $peso;
    private $nombre;
    private $sensibleAlCalor;

    public function __construct($id,$peso,$nombre,$sensibleAlCalor) {
        $this->id = $id;
        $this->peso = $peso;
        $this->nombre = $nombre;
        $this->sensibleAlCalor = $sensibleAlCalor;
    }
    public function esSensibleAlCalor()
    {
        return $this->sensibleAlCalor;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function getId()
    {
        return $this->id;
    }
}