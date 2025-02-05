<?php

namespace Animal\Class\Food;

/**
 * Trait dla zwierząt roślinożernych.
 * Zapewnia funkcjonalności dla zwierząt, które są rożlinożerne.
 */
trait HerbivoreTrait
{
    /**
     * Typ diety zwierzęcia.
     * Zwraca informację o tym, że zwierzę jest roślinożerne.
     *
     * @return array
     */
    public function getFoodType(): array
    {
        return ['rośliny'];
    }

    /**
     * Zjada pokarm.
     * @param string $food pokarm do zjedzenia.
     * 
     * @return string
     */
    public function eat(string $food): string
    {
        return "zjada {$food} chrupiąc wesoło.";
    }
}
