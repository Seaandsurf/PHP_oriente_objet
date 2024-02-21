<?php

declare(strict_types=1);

class beverage
{
    protected $name;
    protected $alcoholPercentage;
    protected $color;

    public function __construct(string $name, float $alcoholPercentage, string $color)
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
    }

    // Removed private beerInfo method, details accessible directly

    // Get the beer name
    public function getName(): string
    {
        return $this->name;
    }

    // Set the beer name
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Get the alcohol percentage
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    // Set the alcohol percentage
    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Get the color
    public function getColor(): string
    {
        return $this->color;
    }

    // Set the color
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Display the beer details
    public function showDetails(): void
    {
        echo "Name: " . $this->name . "<br>";
        echo "Alcohol percentage: " . $this->alcoholPercentage . "% <br>";
        echo "Color: " . $this->color . "<br>";
    }
}

$duvel = new Beverage("Duvel", 8.5, "blond");

echo "Beer name: " . $duvel->getName() . "<br>";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "% <br>";
echo "Color: " . $duvel->getColor() . "<br>";

$duvel->setColor("light");

echo "New color: " . $duvel->getColor() . "<br>";
$duvel->showDetails();



/* EXERCISE 4

Copy the code of exercise 3 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.

USE TYPEHINTING EVERYWHERE!
*/