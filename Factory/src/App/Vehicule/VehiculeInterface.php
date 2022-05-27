<?php

namespace App\Vehicule;

interface VehiculeInterface
{
    public function start(): void;
    public function stop(): void;
}
