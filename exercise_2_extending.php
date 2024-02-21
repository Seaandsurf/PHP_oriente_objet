<?php

declare(strict_types=1);

require_once("exercise_1_classes.php");

class beer extends beverage 

{
public $alcoholPercentage;

public function __construct(string $name, string $color, float $price, string $temperature, float $alcoholPercentage)
{

    parent::__construct($name, $color, $price, $temperature);
    $this->alcoholPercentage = $alcoholPercentage;
}

public function alcoholPercentage()
{
    echo  "The " . $this->name . " is " .  $this->temperature . " and " . $this->color . ", the price is " . $this->price . " €. There is " . $this->alcoholPercentage . "% of alcohol !";

}

}

$duvel = new beer ("duvel", "blond", 3.5, "cold", 8.5);
echo $duvel->getInfo() . "<br>";
echo $duvel->alcoholPercentage() . "<br>";
print_r($duvel);

?>

