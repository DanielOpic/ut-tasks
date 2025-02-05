<?php

namespace Animal\Class\Food;

/**
 * Trait dla zwierząt wszystkożernych.
 * Zapewnia funkcjonalności dla zwierząt, które są wszystkożerne.
 */
trait OmnivoreTrait
{
    /**
     * Typ diety zwierzęcia.
     * Zwraca informację o tym, że zwierzę jest wszystkożerne.
     *
     * @return array
     */
    public function getFoodType(): array
    {
        return ['mięso', 'rośliny'];
    }

    /**
     * Zjada pokarm.
     * @param string $food pokarm do zjedzenia.
     * 
     * @return string
     */
    public function eat(string $food): string
    {
        return "zjada {$food} nie wybrzydzajac.";
    }
}
