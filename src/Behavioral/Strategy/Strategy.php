<?php

namespace Pattern\Behavioral\Strategy;

/**
 * Class Strategy
 * @package Pattern\Behavioral\Strategy
 */
class Strategy
{

    function __construct()
    {
        $car = new Car(new GasConsumeStrategy());

        $car->addRoute(20);

        $car->setConsumeStrategy(new ElectricConsumeStrategy());

        $car->addRoute(10);

        $car->totalConsume();

    }

}
