<?php namespace HeroApp\Characters;


use HeroApp\Hero;
use HeroApp\Strategies\Fighting\BowFightingStrategy;
use HeroApp\Strategies\Running\BipedRunningStrategy;
use HeroApp\Strategies\Swimming\NormalSwimmingStrategy;
use HeroApp\Strategies\Walking\BipedWalkingStrategy;

class Archer extends Hero
{
    public function __construct()
    {
        parent::__construct(
            new BipedWalkingStrategy(),
            new BipedRunningStrategy(),
            new NormalSwimmingStrategy(),
            new BowFightingStrategy()
        );
    }
}
