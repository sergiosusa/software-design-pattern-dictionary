<?php


namespace Pattern\Behavioral\Strategy;

/**
 * Class Car
 * @package Pattern\Behavioral\Strategy
 */
class Car
{
    /**
     * @var ConsumeStrategy
     */
    private $consumeStrategy;

    /**
     * @var array
     */
    private $routes;

    /**
     * Car constructor.
     * @param ConsumeStrategy $consumeStrategy
     */
    public function __construct(ConsumeStrategy $consumeStrategy)
    {
        $this->consumeStrategy = $consumeStrategy;
        $this->routes = [];
    }

    /**
     * @param int $kilometers
     */
    public function addRoute(int $kilometers)
    {
        $this->routes[] = $this->consumeStrategy->calculateCost($kilometers);
    }

    /**
     * @return int
     */
    public function totalConsume()
    {
        $total = 0;

        foreach ($this->routes as $route) {
            $total+=$route;
        }

        return $total;
    }

    /**
     * @param ConsumeStrategy $consumeStrategy
     */
    public function setConsumeStrategy(ConsumeStrategy $consumeStrategy)
    {
        $this->consumeStrategy = $consumeStrategy;
    }
}
