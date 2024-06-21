<?php


class Ruta {

    private $id;
    private $direcciones = [];
    private $direccionesYaVisitadas = [];
    private $urbana;

    public function __construct($id,$urbana) {
        $this->id = $id;
        $this->urbana = $urbana;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDireccionesYaVisitadas()
    {
        return $this->direccionesYaVisitadas;
    }

    public function getDirecciones()
    {
        return $this->direcciones;
    }
    public function esUrbana()
    {
        return $this->urbana;
    }
    public function eliminarDireccion()
    {
        $remove = array_shift($this->direcciones);          
        $this->direccionesYaVisitadas[] = $remove;
    }

    public function agregarDireccion($direccion)
    {
        $this->direcciones[] = $direccion;
    }

}