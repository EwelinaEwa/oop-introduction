<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo()
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholpercentage;

    public function __construct($name, $alcoholpercentage, $color, $price, $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature);
    }


    public function getName()
    {
        return $this->name;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholpercentage;
    }

    private function beerInfo($name, $alcoholpercentage, $color)
    {
        return "Hi i'm {$name} and have an alcohol percentage of {$alcoholpercentage} and I have a {$color} color.";
    }

    public function publicBeerInfo($name, $alcoholpercentage, $color)
    {
        $publicBeerInfo = $this->beerInfo($name, $alcoholpercentage, $color);
        return $publicBeerInfo;
    }

}

$Duvel = new Beer("Duvel", 8.5, "blond", 3.5);

echo $Duvel->getTemperature();
echo "<br>";
echo $Duvel->getAlcoholpercentage();
echo "<br>";
//echo $Duvel->alcoholpercentage;
//echo "<br>";
echo $Duvel->getColor();
echo "<br>";
echo $Duvel->getInfo();
echo "<br>";
$Duvel->setColor("light");
echo $Duvel->getColor();
echo "<br>";
echo $Duvel->publicBeerInfo($Duvel->getName(), $Duvel->getAlcoholpercentage(), $Duvel->getColor());