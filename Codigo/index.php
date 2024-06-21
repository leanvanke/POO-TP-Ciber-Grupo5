<?php

// Incluir las clases
require_once 'vehiculo.php';
require_once 'camion.php';
require_once 'utilitario.php';
require_once 'empresa.php';
require_once 'almacenCentral.php';
require_once 'gerente.php';
require_once 'ruta.php';
require_once 'producto.php';


/*
$empresa = new Empresa("Homero Jay Shipping");
$gerente= new Gerente("Lean");
$almacenCentral = new AlmacenCentral($gerente);
$empresa->setAlmacen($almacenCentral);

// Crear instancias de vehículos
$camion1 = new Camion(1, 10000);
$camion2 = new Camion(2, 25000);
$camion3 = new CamionRefrigerante(6, 25000);
$utilitario1 = new Utilitario(3, 2000);
$utilitario2 = new Utilitario(4, 2500);

// Crear instancia de flota y agregar vehículos
$empresa->agregarVehiculo($camion1);
$empresa->agregarVehiculo($camion2);
$empresa->agregarVehiculo($camion3);
$empresa->agregarVehiculo($utilitario1);
$empresa->agregarVehiculo($utilitario2);

// Mostrar descripción de la flota
echo $empresa->descripcion();

echo $utilitario1->navegarAreasUrbanas();
*/


$empresa = new Empresa("Homero Jay Shipping");
$gerente= new Gerente("Lean");
$empresa->getAlmacen()->setManager($gerente);
$camion1 = new Camion(1, 10000);
$camion2 = new Camion(2, 20000);
$empresa->agregarVehiculo($camion1);
$empresa->agregarVehiculo($camion2);
$ruta1 = new Ruta(1,false);
$ruta1->agregarDireccion("Test 1");
$ruta1->agregarDireccion("Test 2");
$producto = new Producto(1,1,"Coca-Cola",false);
$empresa->getAlmacen()->addProducto($producto);
$empresa->getAlmacen()->addRutas($ruta1);

echo $empresa->descripcion();

print_r($empresa->prestarVehiculo(1));

echo "Presto 1 Camion" . "\n";

echo $empresa->descripcion();
?>
