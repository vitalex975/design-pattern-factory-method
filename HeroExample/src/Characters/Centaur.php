<?php namespace HeroApp\Characters;


use HeroApp\Hero;
use HeroApp\Strategies\Fighting\BowFightingStrategy;
use HeroApp\Strategies\Running\QuadrupedRunningStrategy;
use HeroApp\Strategies\Swimming\NoSwimmingStrategy;
use HeroApp\Strategies\Walking\QuadrupedWalkingStrategy;

class Centaur extends Hero
{
    public function __construct()
    {
        parent::__construct(
            new QuadrupedWalkingStrategy(),
            new QuadrupedRunningStrategy(),
            new NoSwimmingStrategy(),
            new BowFightingStrategy()
        );
    }
}
