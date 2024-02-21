<?php

declare(strict_types=1);

require_once("exercise_1_classes.php"); // Make sure this file exists

class beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    public const BARNAME = 'Het Vervolg';

    public function __construct(
        string $name,
        string $color,
        float $price,
        string $temperature
    ) {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is called " . $this->name . ". It is " . $this->color . " and " . $this->temperature . ". It costs €" . $this->price . ".";
    }

    public function getBarName(): string
    {
        return self::BARNAME; // Using self to access the constant defined within the class
    }
}

class beer extends beverage
{
    private float $alcoholPercentage;

    public function __construct(
        string $name,
        string $color,
        float $price,
        string $temperature,
        float $alcoholPercentage
    ) {
        parent::__construct($name, $color, $price, $temperature);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholContent(): string
    {
        return "This beer is " . $this->getBarName() . "'s " . $this->name . ". It is " . $this->temperature . " and " . $this->color . ". It costs €" . $this->price . " and has " . $this->alcoholPercentage . "% alcohol.";
    }
}

$duvel = new beer("Duvel", "blond", 3.5, "cold", 8.5);

echo $duvel->getInfo() . PHP_EOL; // Use PHP_EOL for new line on different systems
echo $duvel->getAlcoholContent() . PHP_EOL;

// You can print_r($duvel) here if you want the full object details



/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/