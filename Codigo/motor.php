<?php
class Motor {

    public $numero;
    public $motorEncendido;

    public function __construct($numeroMotor){
        $this->numero = $numeroMotor;
        $this->motorEncendido = false;
    }

    public function getNumero() {
        return $this -> numero;
    } 

    public function estadoMotor() {
        if ($this->motorEncendido == false) {
            return "Apagado";
        } else {
            return 'Encendido';
        }
    }

    public function encender() {
        echo 'Encendiendo motor<br>';
        $this->motorEncendido = true;
    }

    public function apagar() {
        echo 'Apagando motor<br>';
        $this->motorEncendido = false;
    }

}
?>