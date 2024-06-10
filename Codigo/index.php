<?php

// Incluir las clases
require_once 'vehiculo.php';
require_once 'camion.php';
require_once 'utilitario.php';
require_once 'flota.php';
require_once 'almacenCentral.php';
require_once 'gerente.php';

$gerente= new Gerente("Lean");
$almacenCentral = new AlmacenCentral($gerente);


// Crear instancias de vehículos
$camion1 = new Camion(1, 10000, "empresa1");
$camion2 = new Camion(2, 25000, "empresa1");
$camion3 = new CamionRefrigerante(6, 25000, "empresa1");
$utilitario1 = new Utilitario(3, 2000,"empresa1");
$utilitario2 = new Utilitario(4, 2500,"empresa1");

// Crear instancia de flota y agregar vehículos
$flota = new Flota();
$flota->agregarVehiculo($camion1);
$flota->agregarVehiculo($camion2);
$flota->agregarVehiculo($camion3);
$flota->agregarVehiculo($utilitario1);
$flota->agregarVehiculo($utilitario2);

$almacenCentral->setFlota($flota);

// Mostrar descripción de la flota
echo $almacenCentral->descripcion();

?>
