<?php


class DptoMantenimiento {


    public function mantenimiento($flota)
    {
        foreach ($flota as $vehiculo) {
            if ($this->$vehiculo->ultimoMantenimiento() < date("Y/m/d")){
                $vehiculo->darMantenimiento();
            } 
        }
        
    }

}