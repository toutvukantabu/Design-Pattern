<?php

namespace Factory;

use Factory\AbstractVehicule;
/**
 * La classe factory permet d'instancier les classes enfant d'AbstractVehicule
 */
class VehiculeFactory
{


    /**
     *
     * @param string $models -> Model::class
     * @return AbstractVehicule
     */
    public function createVehicule(string $models): AbstractVehicule
    {
        $className =  $models ;
        
        if (!class_exists($className)) throw new \Exception("la classe .'  $models ' . n\'existe pas");

        return new $className();
    }
}
