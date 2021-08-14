<?php namespace HeroApp\Factories;


use HeroApp\Hero;

class RandomCharacterFactory implements CharacterFactoryInterface
{
    /**
     * @throws \Exception
     */
    public function createCharacter(array $poolOfCharacters): Hero
    {
        $randomPoolIndex = random_int(0, count($poolOfCharacters) - 1);
        return new $poolOfCharacters[$randomPoolIndex]();
    }
}
