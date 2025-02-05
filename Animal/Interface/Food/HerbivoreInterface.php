<?php

namespace Animal\Interface\Food;

/**
 * Interfejs dla zwierząt roślinożernych.
 * Określa metody związane z dietą roślinożernych zwierząt.
 */
interface HerbivoreInterface
{
    /**
     * Zwraca typ diety zwierzęcia (roślinożerne).
     *
     * @return array
     */
    public function getFoodType(): array;

    /**
     * Zjada pokarm.
     * @param string $food pokarm do zjedzenia.
     * 
     * @return string
     */
    public function eat(string $food): string;
}
