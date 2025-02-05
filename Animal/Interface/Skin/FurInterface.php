<?php

namespace Animal\Interface\Skin;

/**
 * Interfejs dla zwierząt z futrem.
 * Określa metody związane z posiadaniem futra przez zwierzęta.
 */
interface FurInterface
{
    /**
     * Zwraca typ skóry zwierzęcia (futro).
     *
     * @return string
     */
    public function getSkinType(): string;

    /**
     * Czesanie futra zwierzęcia.
     *
     * @return void
     */
    public function combFur(): void;
}
