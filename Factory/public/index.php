<?php

use App\Vehicule\VehiculeFactory;

require '../vendor/autoload.php';

$vehiculeFactory = new VehiculeFactory();

$voiture = $vehiculeFactory->createVehicule(Voiture::class)->setMarque('audi')->getRoue(4);
