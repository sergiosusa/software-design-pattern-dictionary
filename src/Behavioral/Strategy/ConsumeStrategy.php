<?php


namespace Pattern\Behavioral\Strategy;

/**
 * Interface ConsumeStrategy
 * @package Pattern\Behavioral\Strategy
 */
interface ConsumeStrategy
{
    /**
     * @param int $kilometers
     * @return mixed
     */
    public function calculateCost(int $kilometers);
}
