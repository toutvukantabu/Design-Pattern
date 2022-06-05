<?php

use Builder\Car;
use Builder\CarDirector;
use Builder\Bmw\BmwBuilder;
use Factory\VehiculeFactory;
use Factory\Voiture\Voiture;
use Builder\Audi\AudiBuilder;

require '../vendor/autoload.php';

// design pattern Factory

// Creation d'une voiture
$vehiculeFactory = new VehiculeFactory();

$voiture = $vehiculeFactory
->createVehicule(Voiture::class)
->setMarque('audi')
->setRoue(4)
->setMoteur('v6')
->setPlace(5)
->setVitesse(120)
->setVoler(false);

dump($voiture);
echo("\r\n");

/** @var \Voiture $voiture */
$audi = $voiture->start();
echo("\r\n");
$audi = $voiture->stop();
echo("\r\n");







//***********************************************************************************************************\\

$director = new CarDirector();
$audi = $director->build(new AudiBuilder(new Car()));
$bmw = $director->build(new BmwBuilder(new Car()));
echo "Modél: " . $audi->name . "<br>";
echo "Modél: " . $audi->model . "<br>";
var_dump($audi);
