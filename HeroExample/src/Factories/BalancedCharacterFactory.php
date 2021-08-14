<?php namespace HeroApp\Factories;


use HeroApp\Hero;

class BalancedCharacterFactory implements CharacterFactoryInterface
{
    static int $characterIndex = 0;


    public function createCharacter(array $poolOfCharacters): Hero
    {
        if (static::$characterIndex === count($poolOfCharacters)) static::$characterIndex = 0;
        return new $poolOfCharacters[static::$characterIndex++];
    }
}
