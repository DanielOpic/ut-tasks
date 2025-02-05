<?php

namespace Animal\Species;

use Animal\Class\Animal;
use Animal\Class\Food\OmnivoreTrait;
use Animal\Class\Skin\FurTrait;
use Animal\Interface\Food\OmnivoreInterface;
use Animal\Interface\Skin\FurInterface;

/**
 * Klasa reprezentująca lisa.
 * Lis jest zwierzęciem wszystkożernym i ma futro.
 */
class Fox extends Animal implements OmnivoreInterface, FurInterface
{
    use OmnivoreTrait, FurTrait;

    /**
     * Konstruktor klasy Fox.
     *
     * @param string|null $name imię lisa.
     */
    public function __construct(?string $name = null)
    {
        parent::__construct('Lis', $name);
    }
}
