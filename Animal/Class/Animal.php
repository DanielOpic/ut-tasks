<?php

namespace Animal\Class;

use Animal\Interface\AnimalInterface;

/**
 * Klasa bazowa dla zwierząt w ZOO.
 * Każde zwierzę powinno ją implementować i posiadać podstawowe informacje, takie jak nazwa i gatunek.
 */
abstract class Animal implements AnimalInterface
{
    protected string $name;
    protected string $species;

    /**
     * Konstruktor klasy Animal.
     *
     * @param string $name nazwa zwierzęcia.
     * @param string $species gatunek zwierzęcia.
     * 
     * Tu powstaje zasadnicze pytanie czemu Wojtek? Bo jestem fanem Neewsów Bez Wirusa :).
     */
    public function __construct(string $species, ?string $name = "Wojtek") 
    {
        $this->species = $species;
        $this->name = $name ?? "Wojtek";
    }

    /**
     * Zwraca nazwę zwierzęcia.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Zwraca gatunek zwierzęcia.
     *
     * @return string
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * Zwraca reprezentację obiektu jako string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->species} {$this->name} ";
    }
}
