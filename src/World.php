<?php


namespace App;

use App\Components\Characters\Character;
use App\Components\Characters\Pets\Creatures\Dog;
use App\Components\Characters\Pets\Creatures\Horse;
use App\Components\Characters\Specialities\Mage;
use App\Components\Characters\Specialities\Rogue;
use App\Components\Characters\Specialities\Warrior;
use App\Components\Dungeons\Room;

//@@ -14,47 +15,51 @@

class World
{
protected ?Character $player = null;


public function __construct()
{
/**
echo '=====================================================' . PHP_EOL;
echo '=====================================================' . PHP_EOL;
echo 'Hello World' . PHP_EOL;
echo '=====================================================' . PHP_EOL;
try {
$sword = new Sword(
'Glamdring', 'The sword of the king',
50, true
);

$anduril = new Sword(
'Anduril', 'Super OP',
80, true
);
$sword = new Sword(
'Glamdring', 'The sword of the king',
50, true
);
$anduril = new Sword(
'Anduril', 'Super OP',
80, true
);
} catch (\Throwable $e) {
// todo handle error
die($e->getMessage());
// todo handle error
die($e->getMessage());
}
try {
$axeOfDeath = new Axe('Axe of Death',
'Axe of Death', 30, true);
$axeOfDeath = new Axe('Axe of Death',
'Axe of Death', 30, true);
} catch (\Throwable $e) {
// todo handle error
die($e->getMessage());
// todo handle error
die($e->getMessage());
}
try {
$shieldOfLife = new Shield('Shield of Life',
'Shield of DLife', 20);
$shieldOfLife = new Shield('Shield of Life',
'Shield of DLife', 20);
} catch (\Throwable $e) {
// todo handle error
die($e->getMessage());
// todo handle error
die($e->getMessage());
}
$maxiHealthPotion = new Potion(
'Maxi Health Potion',
'Turbo Health Potion Deluxe'
'Maxi Health Potion',
'Turbo Health Potion Deluxe'
);
//$gobugobu = new Goblin("Gobugobu");
$rantanplan = new Dog('Rantanplan');
@@ -64,30 +69,30 @@ public function __construct()
$saskue = new Rogue("Saskue");
try {
$abrutus->giveItemOrPet($axeOfDeath);
$abrutus->giveItemOrPet($shieldOfLife);
$abrutus->giveItemOrPet($maxiHealthPotion);
$abrutus->giveItemOrPet($rantanplan);
//$abrutus->giveItemOrPet($gandolfr);
// <- impossible puisque Character n'implémente
//  pas OwnershipInterface
$abrutus->giveItemOrPet($axeOfDeath);
$abrutus->giveItemOrPet($shieldOfLife);
$abrutus->giveItemOrPet($maxiHealthPotion);
$abrutus->giveItemOrPet($rantanplan);
//$abrutus->giveItemOrPet($gandolfr);
// <- impossible puisque Character n'implémente
//  pas OwnershipInterface
} catch (\Throwable $e) {
// todo handle error
// todo handle error
}
try {
$gandolfr->giveItemOrPet($sword);
$gandolfr->giveItemOrPet($shadowFax);
$gandolfr->getPet()?->giveItemOrPet($anduril);
$gandolfr->giveItemOrPet($sword);
$gandolfr->giveItemOrPet($shadowFax);
$gandolfr->getPet()?->giveItemOrPet($anduril);
} catch (\Throwable $e) {
// todo handle error
// todo handle error
}
try {
$gandolfr->equipItem($sword);
$gandolfr->equipItem($sword);
} catch (\Throwable $e) {
echo '[ERROR] ' . $e->getMessage() . PHP_EOL;
echo '[ERROR] ' . $e->getMessage() . PHP_EOL;
}
$abrutus->equipItem($shieldOfLife);
@@ -100,5 +105,54 @@ public function __construct()
var_dump($gandolfr);
//*/

echo '====================================================='.PHP_EOL;
echo '====================================================='.PHP_EOL;
echo 'Hello World'.PHP_EOL;
echo '====================================================='.PHP_EOL;
//$this->createPlayer();
//
//
//}
//
//
//public function createPlayer(): void
//{
//$availableClasses = ['Mage', 'Rogue', 'Warrior',];
//
//$nom = readline('Quel est ton nom ? ');
//
//while (!in_array(
//$classe = readline('Quelle est ta classe ? '.implode(', ', $availableClasses).' ? '),
//$availableClasses,
//true
//)) {
//echo 'Classe non disponible'.PHP_EOL;
//}
//
//try {
//switch ($classe) {
//case 'Mage':
//
//$this->player = new Mage($nom);
//break;
//case 'Rogue':
//
//$this->player = new Rogue($nom);
//break;
//case 'Warrior':
//
//$this->player = new Warrior($nom);
//break;
//}
//} catch (\Throwable $e) {
//// todo handle error
//die($e->getMessage());
//}

//$this->createPlayer();

    $room = new Room(80);
    $room->getNarrative();
}


}