[&laquo; torna all'indice](../../README.md)
# Factory Method Pattern
## Un po' di codice

Il codice di esempio mostra come sia possibile creare un pool di oggetti di tipo "Hero", mediante uno o più factory (la scelta del factory avviene all'esterno, e viene passata come argomento).

In questo modo, il factory viene istanziato dinamicamente, ed essendo comunque un'istanza dell'interfaccia "CharacterFactoryInterface", abbiamo la garanzia di poter usare il metodo `createCharacter`, indipendentemente dalla classe concreta:

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

A puro scopo esemplificativo, sono stati creati 2 factory concreti, con 2 diverse logiche:
- `RandomCharacterFactory` il cui metodo `createCharacter` crea un personaggio a caso
- `BalancedCharacterFactory` il cui metodo `createCharacter` cicla fra i personaggi possibili in modo da restituirne sempre uno diverso

In entrambi i casi, il pool di personaggi ammessi deve essere passato durante la chiamata.

Si noti come i personaggi restituiti siano istanze di classi specifiche (Archer, Centaur, Knight, Wizard), e come queste siano ammesse in quanto tutte estendono la class astratta `Hero`, come richiesto dal "contratto" interfaccia:

```php
interface CharacterFactoryInterface
{
    // ...
    public function createCharacter(array $poolOfCharacters): Hero;
} 
```

Nel codice di esempio, dopo aver ottenuto il personaggio dal factory, viene semplicemente stampata la classe di appartenenza, e vengono poi richiamati i metodi tipici della classe "Hero", a dimostrazione che tutto il processo si è svolto correttamente ed ha fornito l'esito aspettato.

[successivo - Eseguire il codice di esempio &raquo;](05_executeExample.md)
