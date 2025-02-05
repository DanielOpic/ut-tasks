<?php

namespace Animal\Class\Food;

/**
 * Trait dla zwierząt mięsożernych.
 * Zapewnia funkcjonalności dla zwierząt, które są mięsożerne.
 */
trait CarnivoreTrait
{
    /**
     * Typ diety zwierzęcia.
     * Zwraca informację o tym, że zwierzę jest mięsożerne.
     *
     * @return array
     */
    public function getFoodType(): array
    {
        return ['mięso'];
    }

    /**
     * Zjada pokarm.
     * @param string $food pokarm do zjedzenia.
     * 
     * @return string
     */
    public function eat(string $food): string
    {
        return "zjada {$food} mlaskając głośno.";
    }
}
