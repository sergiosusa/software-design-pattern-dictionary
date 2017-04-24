<?php


namespace Pattern\Behavioral\Strategy;


class GasConsumeStrategy implements ConsumeStrategy
{

    const PRICE_PER_KILOMETER = 3;

    /**
     * @param int $kilometers
     * @return int
     */
    public function calculateCost(int $kilometers)
    {
        return $kilometers * self::PRICE_PER_KILOMETER;
    }
}
