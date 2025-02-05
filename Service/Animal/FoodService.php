<?php 

namespace Service\Animal;

class FoodService
{
    /**
     * Karmi zwierzę odpowiednim pokarmem, jeżeli jest on zgodny z jego dietą.
     * Sprawdza, czy pokarm jest odpowiedni, a następnie wykonuje odpowiednią akcję
     * (nakarmienie zwierzęcia lub informowanie, że odmawia pokarmu).
     *
     * Zależnie od środowiska (CLI lub web), używa odpowiedniego końca linii.
     *
     * @param object $animal Obiekt reprezentujący zwierzę, które ma być nakarmione.
     * @param string $food Typ pokarmu, którym zwierzę ma zostać nakarmione (np. 'mięso', 'rośliny').
     *
     * @return void
    */
    public function feedAnimal($animal, string $food): void
    {
        $lineEnding = (php_sapi_name() == "cli") ? PHP_EOL : '<br>';
        if ($this->isFoodAppropriate($animal, $food)) {
            echo $animal->__toString() . ' ' . $animal->eat($food) . ' ' . $lineEnding;
        } else {
            echo $animal->__toString() . ' odmawia pokarmu '.$food . $lineEnding;
        }
    }

    /**
     * Sprawdza, czy dany pokarm pasuje do zwierzęcia.
     * 
     * @param $animal Obiekt zwierzęcia.
     * @param string $food pokarm do sprawdzenia.
     * 
     * @return bool True, jeśli pokarm jest odpowiedni, false w przeciwnym razie.
     */
    private function isFoodAppropriate($animal, string $food): bool
    {
        // Pobieramy dostępne pokarmy dla zwierzęcia
        $availableFoods = $animal->getFoodType();

        // Sprawdzamy, czy dany pokarm jest dostępny wśród dostępnych pokarmów zwierzęcia
        return in_array($food, $availableFoods);
    }

     /**
     * Zwraca wszystkie dostępne pokarmy.
     *
     * @return array
     */
    public function getAvailableFoods(): array
    {
        return ['mięso', 'rośliny'];
    }
}
