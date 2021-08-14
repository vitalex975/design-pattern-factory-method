<?php

/**
 * Usage: php main.php factory=0 | php main.php factory=1
 */

require __DIR__ . '/../../vendor/autoload.php';

use HeroApp\Factories\CharacterFactoryInterface;
use HeroApp\Strategies;

$args = null;
parse_str(implode('&', array_slice($argv, 1)), $args);

$factoriesConfig = require __DIR__ . '/../config/factories.characters.php';

$factoryFQCN = $factoriesConfig[$args['factory']];
echo "\n\nCreating Characters using $factoryFQCN factory...\n";

/** @var CharacterFactoryInterface $charactersFactory */
$charactersFactory = new $factoryFQCN();
$characters = [];

for ($i = 0; $i < 10; $i++) {
    echo "\nCreating character $i...";
    $character = $charactersFactory->createCharacter(CharacterFactoryInterface::COMPLETE_POOL_OF_CHARACTERS);
    echo "\nI'm a " . get_class($character) . ". In fact, I am:";
    $character->walk();
    $character->run();
    $character->swim();
    $character->fight();
    $characters[] = $character;
    echo "\n";
}

echo "\n\nAll done!\n";
