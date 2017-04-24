<?php

namespace Test\Pattern\Behavioral\Strategy;

use Pattern\Behavioral\Strategy\Car;
use Pattern\Behavioral\Strategy\ElectricConsumeStrategy;
use Pattern\Behavioral\Strategy\GasConsumeStrategy;
use Pattern\Behavioral\Strategy\Strategy;

class StrategyTest extends \PHPUnit_Framework_TestCase
{

    public function testComplexRoute()
    {
        $car = new Car(new GasConsumeStrategy());

        $car->addRoute(20);

        $car->setConsumeStrategy(new ElectricConsumeStrategy());

        $car->addRoute(10);

        $this->assertEquals(80, $car->totalConsume());
    }
}
