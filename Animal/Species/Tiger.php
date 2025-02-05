<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\CarnivoreTrait;
use Animal\Class\Skin\FurTrait;
use Animal\Interface\Food\CarnivoreInterface;
use Animal\Interface\Skin\FurInterface;



/**
 * Klasa reprezentująca tygrysa.
 * Tygrys jest zwierzęciem mięsożernym i posiada futro.
 */
class Tiger extends Animal implements CarnivoreInterface, FurInterface
{
    use CarnivoreTrait, FurTrait;

    /**
     * Konstruktor klasy Tiger.
     *
     * @param string|null $name imię tygrysa.
     */
    public function __construct(?string $name = null)
    {
        parent::__construct('Tygrys', $name);
    }

}
