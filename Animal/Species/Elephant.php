<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\HerbivoreTrait;
use Animal\Interface\Food\HerbivoreInterface;


/**
 * Klasa reprezentująca słonia.
 * Słoń jest zwierzęciem roślinożernym, ale nie ma futra.
 */
class Elephant extends Animal implements HerbivoreInterface
{
    use HerbivoreTrait;

    /**
     * Konstruktor klasy Elephant.
     *
     * @param string|null $name imię słonia.
     */
    public function __construct(?string $name = null)
    {
        parent::__construct('Słoń', $name);
    }

}
