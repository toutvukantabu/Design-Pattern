<?php

use Builder\Car;
use Builder\CarDirector;
use Builder\Bmw\BmwBuilder;
use Builder\Audi\AudiBuilder;
use Factory\Vehicule\VehiculeFactory;

require '../vendor/autoload.php';


// design pattern Factory
$vehiculeFactory = new VehiculeFactory();

$voiture = $vehiculeFactory->createVehicule(Voiture::class)->setMarque('audi')->setRoue(4);

dump($voiture->getMarque());

//***********************************************************************************************************\\

$director = new CarDirector();
$audi = $director->build(new AudiBuilder(new Car()));
$bmw = $director->build(new BmwBuilder(new Car()));
echo "Modél: " . $audi->name . "<br>";
echo "Modél: " . $audi->model . "<br>";
var_dump($audi);