<?php

namespace Factory\Vehicule;

class VehiculeFactory
{
    public function createVehicule(string $models): Vehicule
    {
        $className = "Factory\\Vehicule\\" . $models . "\\" . $models;
        if (!class_exists($className)) throw new \Exception("la classe .'  $models ' . n\'existe pas");

        return new $className();
    }
}
