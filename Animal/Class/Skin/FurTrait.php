<?php

namespace Animal\Class\Skin;

/**
 * Trait dla zwierząt z futrem.
 * Zapewnia funkcjonalności dla zwierząt, które posiadają futro.
 */
trait FurTrait
{
    /**
     * Typ skóry zwierzęcia.
     * Zwraca informację o tym, że zwierzę ma futro.
     *
     * @return string
     */
    public function getSkinType(): string
    {
        return 'Futro';
    }

    /**
     * Czesanie futra zwierzęcia.
     * Funkcja symuluje czesanie futra.
     *
     * @return void
     */
    public function combFur(): void
    {
        echo "Czesanie futra zwierzęcia.";
    }
}
