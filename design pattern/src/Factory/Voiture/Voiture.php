<?php

namespace Factory\Voiture;

use Factory\AbstractVehicule;
use Factory\VehiculeInterface;


class Voiture extends AbstractVehicule implements VehiculeInterface
{

    public function start(): void
    {
        echo "ma voiture de marque " . AbstractVehicule::getMarque() . " démarre" ;
    }

    public function stop(): void
    {

        echo "ma voiture de marque " . AbstractVehicule::getMarque() . " s'arrête";
    }
}
