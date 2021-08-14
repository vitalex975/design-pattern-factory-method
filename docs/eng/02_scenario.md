[&laquo; back to index](../../README.md)
# Factory Method Pattern
## Scenario

Let's go back to the example already adopted for the **strategy pattern**, and let's imagine we are working on a video game in which both the protagonist and the other characters are instances of a Hero class (or a class which extends "Hero").

We have 4 different declinations of "Hero" available: the archer, the centaur, the knight and the magician. The creation of each of them passes through the definition of 4 different strategies relating to as many aspects of the character:
- how he walks
- how he runs
- how he fights
- how he swims

Let's assume that, as it often happens in a real application, the character creation process must be called in different parts of the code, for example:
- at the beginning of the game, when the player chooses his own alter ego
- during the game, when a part of the characters that populate the world get defeated, and it is therefore necessary to introduce new ones

The creation phase could involve one or more particular logics.

For example, to repopulate the play area, we may want to apply a logic that randomly "extracts" the type of character to be created.

Furthermore, the "random" logic may not be the only needed logic: for example, under certain circumstances, we may need a "balanced" creation logic between the different types of characters.

It begins to be intuitive that a more or less complex logic, applied to every process of creating more or less complex objects, finds its fair place in an isolated and reusable component of the code.

[next - Enter "Factory Method Pattern" &raquo;](03_pattern.md)
