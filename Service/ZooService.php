<?php

namespace Service;

use Service\Animal\AnimalService;

/**
 * Klasa obsługująca ZOO.
 */
class ZooService
{
    private AnimalService $animalService;

    /**
     * Konstruktor
     */
    public function __construct()
    {
        // Tworzymy instancję AnimalService, która zarządza zwierzętami
        $this->animalService = new AnimalService();
    }

    /**
     * Zwraca wszystkie zwierzęta w ZOO.
     *
     * @return array
     */
    public function getAllAnimals(): array
    {
        return $this->animalService->getAllAnimals();
    }

    /**
     * Dodaje zwierzę do ZOO.
     *
     * @param mixed $animal
     * 
     * @return void
     */
    public function addAnimal($animal): void
    {
        $this->animalService->addAnimal($animal);
    }

    /**
     * Karmie zwierzę określonym pokarmem.
     *
     * @param mixed $animal
     * @param string $food
     * 
     * @return void
     */
    public function feedAnimal($animal, string $food): void
    {
        $this->animalService->feedAnimal($animal, $food); // Wywołanie metody feedAnimal() z AnimalService
    }

   
    /**
     * Nakarm wszystkie zwierzęta w ZOO.
     *
     * @return void
     */
    public function feedAllAnimals(): void
    {
        // Pobierz wszystkie zwierzęta z ZOO
        $animals = $this->animalService->getAllAnimals();

        $availableFoods = $this->animalService->getAvailableFoods(); // Przykładowe dostępne pokarmy

        // Iteracja po każdym zwierzęciu
        foreach ($animals as $animal) {
            $foodType = $animal->getFoodType(); // Typ diety zwierzęcia

            // Zmniejszam dostępność pokarmów do tych, które zwierzę może jeść
            $possibleFoods = array_intersect($foodType, $availableFoods); // Pokarmy, które mogą być podane

            // Jeśli zwierzę ma dostępne pokarmy
            if (!empty($possibleFoods)) {
                // Losuje pokarm, jeśli dostępny jest więcej niż jeden
                $food = count($possibleFoods) > 1 ? $possibleFoods[array_rand($possibleFoods)] : $possibleFoods[0];
                $this->animalService->feedAnimal($animal, $food);
            } else {
                // Tu można obsłużyć co się stanie jak nie ma dostępnego pokarmu.
                // Może być bunt w zoo :) dlatego w przeciwieństwie do reszty ta funkcja bezpośrednio tutaj
            }
        }
    }

    /**
     * Czesze wszystkie zwierzęta, które mają futro.
     */
    public function groomAllAnimals(): void
    {
        $this->animalService->groomAllAnimals(); // Wywołanie metody groomAllAnimals w AnimalService
    }
}
