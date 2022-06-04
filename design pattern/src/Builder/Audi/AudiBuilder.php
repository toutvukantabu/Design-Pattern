<?php

namespace Builder\Audi;

use Builder\Car;
use Builder\CarBuilderInterface;

class AudiBuilder implements CarBuilderInterface
{


    private $car;

    public function __construct(Car $car)
    {
        $this->car = $car;
    }
    public function setName()
    {
        $this->car->name = "Audi";
    }

    public function setModel()
    {
        $this->car->model = "A7";
    }
    public function getCar()
    {
        return $this->car;
    }
}
