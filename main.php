<?php 

require_once 'vendor/autoload.php';

use Service\ZooService;
use Animal\Species\Tiger;
use Animal\Species\Elephant;
use Animal\Species\Fox;
use Animal\Species\Rabbit;
use Animal\Species\SnowLeopard;
use Animal\Species\Rhino;

// Tworzę instancję serwisu ZOO
$zooService = new ZooService();

// Tworzę zwierzęta
$tygrys = new Tiger('Stefan');
$slon = new Elephant(); //Jak by nam się zapomniało nazwać zwierzaka
$lis = new Fox('Franek');
$krolik = new Rabbit(); //Tutaj wyjątek od Wojtka
$irbis = new SnowLeopard('Angelika');
$nosorozec = new Rhino('Janek');

// Dodaję zwierzęta do ZOO
$zooService->addAnimal($tygrys);
$zooService->addAnimal($slon);
$zooService->addAnimal($lis);
$zooService->addAnimal($krolik);
$zooService->addAnimal($irbis);
$zooService->addAnimal($nosorozec);

// Wyświetlam wszystkie zwierzęta w ZOO
echo "<h3>Zwierzęta w ZOO:</h3>";
$animals = $zooService->getAllAnimals();
echo '<ul>';
foreach ($animals as $animal) {
    echo '<li>' . $animal . '</li>';
}
echo '</ul>';

// Karmienie wszystkich zwierząt
echo "<h3>Karmienie zwierząt:</h3>";
$zooService->feedAllAnimals();

// Przykład karmienia zwierzęcia wybranym pokarmem
echo "<h3>Karmienie konkretnego zwierzaka:</h3>";
$zooService->feedAnimal($tygrys, 'mięso');
$zooService->feedAnimal($tygrys, 'rośliny');
$zooService->feedAnimal($tygrys, 'piwo');
$zooService->feedAnimal($lis, 'piwo');

// Czesanie wszystkich zwierząt
echo "<h3>Czesanie zwierząt:</h3>";
$zooService->groomAllAnimals();
