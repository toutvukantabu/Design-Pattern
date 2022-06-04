<?php

namespace Factory\Vehicule\Voiture;

use Factory\Vehicule\Vehicule;
use Factory\Vehicule\VehiculeInterface;

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
