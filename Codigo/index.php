<?php

// Incluir las clases
require_once 'empresa.php';
require_once 'gerente.php';
require_once 'vehiculo.php';
require_once 'camion.php';
require_once 'camionRefrigerante.php';
require_once 'utilitario.php';
require_once 'ruta.php';
require_once 'producto.php';


//Creo los Produtos
$producto1 = new Producto(1,1,"Coca-Cola",false);
$producto2 = new Producto(2,25,"Helado",true);
$producto3 = new Producto(3,5,"Pan",false);
$producto4 = new Producto(4,100,"Harina",false);

//Creo las Rutas
$ruta1 = new Ruta(1,false);
$ruta1->agregarDireccion("Test 1");
$ruta1->agregarDireccion("Test 2");
$ruta2 = new Ruta(2,false);
$ruta2->agregarDireccion("Test 3");
$ruta2->agregarDireccion("Test 4");
$ruta3 = new Ruta(3,true);
$ruta3->agregarDireccion("Test 5");
$ruta3->agregarDireccion("Test 6");

//Creo Empresas con sus Gerentes
$empresa = new Empresa("Homero Jay Shipping");
$empresa2 = new Empresa("Empresa que va a Prestar un Vehiculo");
$gerente1= new Gerente("Lean");
$gerente2= new Gerente("Juan");
$empresa->getAlmacen()->setManager($gerente1);
$empresa2->getAlmacen()->setManager($gerente2);

//Creo 1 de cada vehiculo y los agurego a la flota
$camion = new Camion(1);
$camionRefrigerante = new CamionRefrigerante(2);
$utilitario = new Utilitario(3);
$empresa->agregarVehiculo($camion);
$empresa->agregarVehiculo($camionRefrigerante);
$empresa->agregarVehiculo($utilitario);

//Agrego los productos y las rutas al almacen general
$empresa->getAlmacen()->addProducto($producto1);
$empresa->getAlmacen()->addProducto($producto2);
$empresa->getAlmacen()->addProducto($producto3);
$empresa->getAlmacen()->addProducto($producto4);
$empresa->getAlmacen()->addRutas($ruta1);
$empresa->getAlmacen()->addRutas($ruta2);
$empresa->getAlmacen()->addRutas($ruta3);

//Veo por consola una descripcion de la empresa
echo $empresa->descripcion();

//Cargo los vehiculos
$camion->cargar($producto1);
$camion->cargar($producto4);
$camionRefrigerante->cargar($producto2);
$utilitario->cargar($producto3);

//Cargo las rutas a los camiones
$camion->setRuta($ruta1);
$camionRefrigerante->setRuta($ruta2);
$utilitario->setRuta($ruta3);


//Veo por consola una descripcion de la empresa actualizada
echo $empresa->descripcion();

//Descargo el utilitario
$utilitario->descargar();

//Veo por consola una descripcion de la empresa actualizada
echo $empresa->descripcion();

?>
