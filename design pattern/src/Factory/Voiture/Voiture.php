<?php

namespace Factory\Voiture;

use Factory\Vehicule;
use Factory\VehiculeInterface;


class Voiture extends Vehicule implements VehiculeInterface
{

    public function start(): void
    {

        echo "ma voiture avance";
    }

    public function stop(): void
    {

        echo 'ma voiture s\'arrête';
    }
}
