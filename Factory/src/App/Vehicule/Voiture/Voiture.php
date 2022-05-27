<?php

namespace App\Vehicule\Voiture;

use App\Vehicule\Vehicule;
use App\Vehicule\VehiculeInterface;

class Voiture extends Vehicule implements VehiculeInterface
{

    public function start(): void
    {

        echo 'ma voiture avance';
    }

    public function stop(): void
    {

        echo 'ma voiture s\'arrête';
    }
}
