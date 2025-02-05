<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\HerbivoreTrait;
use Animal\Interface\Food\HerbivoreInterface;

/**
 * Klasa reprezentująca nosorożca.
 * Nosorożec jest zwierzęciem roślinożernym.
 */
class Rhino extends Animal implements HerbivoreInterface
{
    use HerbivoreTrait;

    /**
     * Konstruktor klasy Rhino.
     *
     * @param string|null $name imię nosorożca.
     */
    public function __construct(?string $name = null)
    {
        parent::__construct('Nosorożec', $name);
    }
}
