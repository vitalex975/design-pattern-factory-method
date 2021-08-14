<?php namespace HeroApp\Characters;


use HeroApp\Hero;
use HeroApp\Strategies\Fighting\MagicFightingStrategy;
use HeroApp\Strategies\Running\BipedRunningStrategy;
use HeroApp\Strategies\Swimming\FloatingSwimmingStrategy;
use HeroApp\Strategies\Walking\BipedWalkingStrategy;

class Wizard extends Hero
{
    public function __construct()
    {
        parent::__construct(
            new BipedWalkingStrategy(),
            new BipedRunningStrategy(),
            new FloatingSwimmingStrategy(),
            new MagicFightingStrategy()
        );
    }
}
