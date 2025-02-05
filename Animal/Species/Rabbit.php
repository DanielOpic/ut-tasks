<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\HerbivoreTrait;
use Animal\Class\Skin\FurTrait;
use Animal\Interface\Food\HerbivoreInterface;
use Animal\Interface\Skin\FurInterface;

/**
 * Klasa reprezentująca królika.
 * Królik jest zwierzęciem roślinożernym i ma futro.
 */
class Rabbit extends Animal implements HerbivoreInterface, FurInterface
{
    use HerbivoreTrait, FurTrait;

    /**
     * Konstruktor klasy Rabbit.
     *
     * @param string $name imię królika - tu oczywisty wyjątek, chyba nie trzeba tłumaczyć :)
     */
    public function __construct(?string $name = 'Bugs')
    {
        parent::__construct('Królik', $name);
    }
}
