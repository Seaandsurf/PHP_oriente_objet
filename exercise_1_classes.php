<?php

declare(strict_types=1);

class beverage

{
    public $name;
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        echo  "The " . $this->name . " is " .  $this->temperature . " and " . $this->color . " the price is " . $this->price . " €";
    }
}

$cola = new beverage("cola", "black", 2);
$fanta = new beverage("fanta", "orange", 2);
$water = new beverage("water", "cristal clear", 1.5);


echo $cola->getInfo() . "<br>";
echo $fanta->getInfo() . "<br>";
echo $water->getInfo();



/* TODO: Have a default value "cold" in the construct for temperature.*/

/* Remember for now we will use properties and methods that can be accessed from everywhere.*/
/* TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."*/
/* TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically*/
 /* print the getInfo on the screen.*/
/* TODO: Print the temperature on the screen.*/

/* USE TYPEHINTING EVERYWHERE! */