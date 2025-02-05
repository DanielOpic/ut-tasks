<?php

namespace Service\Animal;

use Service\Animal\FoodService;
use Service\Animal\SkinService;

/**
 * Klasa zarządzająca zwierzętami w ZOO.
 */
class AnimalService
{
    private array $animals = [];
    private FoodService $foodService;
    private SkinService $skinService;

    public function __construct()
    {
        $this->foodService = new FoodService();
        $this->skinService = new SkinService();
    }

    /**
     * Dodaje zwierzę do ZOO.
     *
     * @param object $animal Obiekt reprezentujący zwierzę, które ma być dodane.
     * 
     * @return void
     */
    public function addAnimal($animal): void
    {
        $this->animals[] = $animal;
    }

    /**
     * Zwraca wszystkie zwierzęta.
     *
     * @return array
     */
    public function getAllAnimals(): array
    {
        return $this->animals;
    }

    /**
     * Karmi zwierzę odpowiednim pokarmem.
     *
     * @param object $animal Obiekt reprezentujący zwierzę, które ma być nakarmione.
     * @param string $food Typ pokarmu, którym zwierzę ma zostać nakarmione.
     *
     * @return void
     */
    public function feedAnimal($animal, string $food): void
    {
        $this->foodService->feedAnimal($animal, $food);
    }

    /**
     * Zwraca wszystkie dostępne pokarmy.
     *
     * @return array
     */
    public function getAvailableFoods(): array
    {
        return $this->foodService->getAvailableFoods();
    }

    /**
     * Czesze wszystkie zwierzęta o ile mają futro.
     * 
     * @return void
     */
    public function groomAllAnimals(): void
    {
        foreach ($this->animals as $animal) {
            // Sprawdzamy, czy zwierzę można czesać
            if ($this->skinService->canGroom($animal)) {
                $this->skinService->groomAnimal($animal); // Jeśli ma futro to czeszemy
            }
        }
    }
}
