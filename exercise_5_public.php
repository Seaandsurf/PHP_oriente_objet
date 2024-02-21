<?php

declare(strict_types=1);

class Beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "The {$this->name} is {$this->temperature} and {$this->color}. The price is {$this->price} €.<br>";
    }
}

// Instantiate objects with corrected price:
$cola = new Beverage("cola", "black", 3.5);
$fanta = new Beverage("fanta", "orange", 3.5);
$water = new Beverage("water", "crystal clear", 1.5);

// Print information with new line and error handling:
echo $cola->getInfo();
echo $fanta->getInfo();
echo $water->getInfo();

?>
