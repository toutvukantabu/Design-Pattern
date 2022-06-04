<?php

namespace Builder;

use Builder\CarBuilderInterface;

class CarDirector
{

    public function build(CarBuilderInterface $builder)
    {
        $builder->setName();
        $builder->setModel();

        return $builder->getCar();
    }
}
