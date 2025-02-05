<?php

namespace Animal\Interface\Food;

/**
 * Interfejs dla zwierząt mięsożernych.
 * Określa metody związane z dietą mięsożernych zwierząt.
 */
interface CarnivoreInterface
{
    /**
     * Zwraca typ diety zwierzęcia (mięsożerne).
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
