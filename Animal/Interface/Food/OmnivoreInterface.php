<?php

namespace Animal\Interface\Food;

/**
 * Interfejs dla zwierząt wszystkożernych.
 * Określa metody związane z dietą wszystkożernych zwierząt.
 */
interface OmnivoreInterface
{
    /**
     * Zwraca typ diety zwierzęcia (wszystkożerne).
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
