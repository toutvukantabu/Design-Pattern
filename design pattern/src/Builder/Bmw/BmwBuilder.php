<?php

namespace Builder\Bmw;

use Builder\Car;
use Builder\CarBuilderInterface;


class BmwBuilder implements CarBuilderInterface
{
  private $car;

  public function __construct(Car $car)
  {
    $this->car = $car;
  }
  public function setName()
  {
    $this->car->name = "Bmw";
  }

  public function setModel()
  {
    $this->car->model = "X90";
  }
  public function getCar()
  {
    return $this->car;
  }
}


