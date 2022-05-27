<?php
namespace App\Vehicule;

class VehiculeFactory
{
    public function createVehicule(string $models): Vehicule
    {
        $className = "App\\Vehicule\\".$models."\\".$models;
        if (!class_exists($className)) throw new \Exception("la classe .'  $models ' . n\'existe pas");

        return new $className();
    }
}
