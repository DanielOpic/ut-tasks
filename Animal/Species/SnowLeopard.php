<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\CarnivoreTrait;
use Animal\Class\Skin\FurTrait;
use Animal\Interface\Food\CarnivoreInterface;
use Animal\Interface\Skin\FurInterface;

/**
 * Klasa reprezentująca irbisa śnieżnego.
 * Irbis jest zwierzęciem mięsożernym i ma futro.
 */
class SnowLeopard extends Animal implements CarnivoreInterface, FurInterface
{
    use CarnivoreTrait, FurTrait;

    /**
     * Konstruktor klasy SnowLeopard.
     *
     * @param string|null $name imię irbisa.
    */
    public function __construct(?string $name = null)
    {
        parent::__construct('Irbis śnieżny', $name);
    }
}
