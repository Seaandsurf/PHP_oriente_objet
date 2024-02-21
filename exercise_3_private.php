<?php

declare(strict_types=1);

class Beer 
{
    private $name;
    private $alcoholPercentage;
    private $color;
    
    public function __construct($name, $alcoholPercentage, $color)
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        $this->color = $color;
    }
    
    // A private method that returns the beer information
    private function beerInfo()
    {
        return "The {$this->name} is {$this->alcoholPercentage}  deegrees of alcohol and the color is {$this->color}.";
    }
    
    // Get the beer name
    public function getName()
    {
        return $this->name;
    }
    
    // Set the beer name
    public function setName($name)
    {
        $this->name = $name;
    }
    
    // Get the alcohol percentage
    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }
    
    // Set the alcohol percentage
    public function setAlcoholPercentage($alcoholPercentage)
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }
    
    // Get the color
    public function getColor()
    {
        return $this->color;
    }
    
    // Set the color
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    // Display the beer details
    public function beerDetails()
    {
        echo $this->beerInfo(); // Call the private method to display the beer information
    }
}

$duvel = new Beer("Duvel", 8.5, "blond");

echo "Beer name: " . $duvel->getName() . "<br>";
echo "Alcohol percentage: " . $duvel->getAlcoholPercentage() . "% <br>";
echo "Color: " . $duvel->getColor() . "<br>";

$duvel->setColor("light");

echo "New color: " . $duvel->getColor() . "<br>";
$duvel->beerDetails();
