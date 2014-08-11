<?php
namespace GSoares\DesignPatterns\Behavioral\Strategy;

class Driver
{
    private $mainVehicle;

    public function __construct(Vehicle $mainVehicle)
    {
        $this->mainVehicle = $mainVehicle;
    }

    public function isPilot()
    {
        return $this->mainVehicle instanceof Airplane;
    }

    public function isTaxiDriver()
    {
        return $this->mainVehicle instanceof Taxi;
    }

    public function isBiker()
    {
        return $this->mainVehicle instanceof Bike;
    }
}


interface Vehicle
{
    public function run();
}

class Airplane implements Vehicle
{
    public function run()
    {
        echo "Running airplane...\n";
    }
}

class Bike implements Vehicle
{
    public function run()
    {
        echo "Running bike...\n";
    }
}

class Taxi implements Vehicle
{
    public function run()
    {
        echo "Running taxi...\n";
    }
}

class StrategyContext
{
    private $vehicle;

    public function __construct(Driver $driver)
    {
        if ($driver->isPilot()) {
            $this->vehicle = new Airplane();

            return;
        }

        if ($driver->isTaxiDriver()) {
            $this->vehicle = new Taxi();

            return;
        }

        if ($driver->isBiker()) {
            $this->vehicle = new Bike();

            return;
        }
    }

    public function runVehicle()
    {
        return $this->vehicle->run();
    }
}

function runStrategy()
{
    $bikerContext = new StrategyContext(new Driver(new Bike()));
    $pilotContext = new StrategyContext(new Driver(new Airplane()));
    $taxiDriverContext = new StrategyContext(new Driver(new Taxi()));

    $bikerContext->runVehicle();
    $pilotContext->runVehicle();
    $taxiDriverContext->runVehicle();
}