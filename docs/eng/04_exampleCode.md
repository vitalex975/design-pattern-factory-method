[&laquo; back to index](../../README.md)
# Factory Method Pattern
## Some code


435 / 5000
Risultati della traduzione
The example code shows how it is possible to create a pool of "Hero" typed objects, using one or more factories (the choice of the factory is done externally, and is passed as an argument).

In this way, the factory is dynamically instantiated, and being an instance of the "CharacterFactoryInterface" interface anyway, we are guaranteed to be able to use the `createCharacter` method, regardless of the concrete class:

```php
$factoriesConfig = [
    HeroApp\Factories\RandomCharacterFactory::class,
    HeroApp\Factories\BalancedCharacterFactory::class,
];

$factoryFQCN = $factoriesConfig[$args['factory']];
// ...
/** @var CharacterFactoryInterface $charactersFactory */
$charactersFactory = new $factoryFQCN();
```

For illustrative purposes only, 2 concrete factories have been created, with 2 different logics:
- `RandomCharacterFactory` whose` createCharacter` method creates a random character
- `BalancedCharacterFactory` whose` createCharacter` method cycles through the possible characters in order to always return a different one

In both cases, the pool of allowed characters must be passed during the call.

Note how the returned characters are instances of specific classes (Archer, Centaur, Knight, Wizard), and how these are allowed as they all extend the abstract `Hero` class, as required by the "contract" (the interface):

```php
interface CharacterFactoryInterface
{
    // ...
    public function createCharacter(array $poolOfCharacters): Hero;
} 
```

In the example code, after obtaining the character from the factory, the class it belongs to is simply printed, and the typical methods of the "Hero" class are then called, demonstrating that the whole process has been carried out correctly and has provided the waited result.

[successivo - Execute the example code &raquo;](05_executeExample.md)
