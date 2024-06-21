<?php
class SistemaDeRefrigeracion {
    
    private $temperatura = 24;

    public function getTemperatura()
    {
        return $this->temperatura;
    }
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;
    }
}