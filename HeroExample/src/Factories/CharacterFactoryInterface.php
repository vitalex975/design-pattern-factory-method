<?php namespace HeroApp\Factories;


use HeroApp\Characters\Archer;
use HeroApp\Characters\Centaur;
use HeroApp\Characters\Knight;
use HeroApp\Characters\Wizard;
use HeroApp\Hero;

interface CharacterFactoryInterface
{
    const COMPLETE_POOL_OF_CHARACTERS = [
        Archer::class,
        Centaur::class,
        Knight::class,
        Wizard::class,
    ];
    
    /**
     * These methods will contain the different logics applied in order to create instances of "Hero" objects.
     * Those logics can be defined in each single implementation of the factory.
     *
     * @param array $poolOfCharacters - A set of "Hero" classes that are considered "instantiable"
     * @return Hero
     */
    public function createCharacter(array $poolOfCharacters): Hero;
}
