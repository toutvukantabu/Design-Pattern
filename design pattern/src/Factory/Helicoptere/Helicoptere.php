<?php

namespace Factory\Helicoptere;

use Factory\AbstractVehicule;
use Factory\VehiculeInterface;

class Helicoptere extends AbstractVehicule implements VehiculeInterface
{
    public function start(): void
    {
        echo "Mon Helicotère de marque" . AbstractVehicule::getMarque() . "s'envole";
    }
    public function stop(): void
    {

        echo "Mon Helicotère de marque" . AbstractVehicule::getMarque() . "a atteri";
    }
}
