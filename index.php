<?php

// Incluir las clases
require_once 'vehiculo.php';
require_once 'camion.php';
require_once 'utilitario.php';
require_once 'flota.php';

// Crear instancias de vehículos
$camion1 = new Camion(1, 10000, true);
$camion2 = new Camion(2, 15000, false);
$utilitario1 = new Utilitario(3, 2000);
$utilitario2 = new Utilitario(4, 2500);

// Crear instancia de flota y agregar vehículos
$flota = new Flota();
$flota->agregarVehiculo($camion1);
$flota->agregarVehiculo($camion2);
$flota->agregarVehiculo($utilitario1);
$flota->agregarVehiculo($utilitario2);

// Mostrar descripción de la flota
echo $flota->descripcion();

?>
