<?php

namespace Animal\Interface;

/**
 * Interfejs dla klasy Animal.
 * Określa metody, które powinny być zaimplementowane przez każdą klasę reprezentującą zwierzę.
 */
interface AnimalInterface
{
    /**
     * Zwraca nazwę zwierzęcia.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Zwraca gatunek zwierzęcia.
     *
     * @return string
     */
    public function getSpecies(): string;

    /**
     * Zwraca reprezentację obiektu jako string.
     *
     * @return string
     */
    public function __toString(): string;
}
