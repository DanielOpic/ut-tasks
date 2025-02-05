<?php

namespace Service\Animal;

use Animal\Interface\Skin\FurInterface;
use Animal\Class\Animal;

class SkinService
{
    /**
     * Sprawdza, czy zwierzę ma futro (czy można je czesać).
     *
     * @param Animal $animal
     * @return bool
     */
    public function canGroom(Animal $animal): bool
    {
        return $animal instanceof FurInterface; // Zwraca true, jeśli zwierzę implementuje FurInterface
    }

    /**
     * Czesanie zwierzęcia.
     *
     * @param Animal $animal
     */
    public function groomAnimal(Animal $animal): void
    {
        $lineEnding = (php_sapi_name() == "cli") ? PHP_EOL : '<br>';
        if ($this->canGroom($animal)) {
            echo 'Czeszę futro ' . $animal->getName() . $lineEnding;
        } else {
            echo 'Ej, ' . $animal->getName() . ' nie ma futra, gdzie z tym grzebieniem!' . $lineEnding;
        }
    }
}
