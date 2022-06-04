<?php

namespace Factory;

use Factory\Vehicule;

class VehiculeFactory
{
    public function createVehicule(string $models): Vehicule
    {
        $className =  $models ;
        if (!class_exists($className)) throw new \Exception("la classe .'  $models ' . n\'existe pas");

        return new $className();
    }
}
