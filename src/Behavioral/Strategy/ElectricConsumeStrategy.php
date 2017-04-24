<?php


namespace Pattern\Behavioral\Strategy;


class ElectricConsumeStrategy implements ConsumeStrategy
{

    const PRICE_PER_KILOMETER = 2;

    /**
     * @param int $kilometers
     * @return int
     */
    public function calculateCost(int $kilometers)
    {
        return $kilometers * self::PRICE_PER_KILOMETER;
    }
}
