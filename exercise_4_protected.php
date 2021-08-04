<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}.";
    }
}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholpercentage;

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

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getColor()
    {
        return $this->color;
    }

}

$Duvel = new Beer("Duvel", 8.5, "blond", 3.5);

echo $Duvel->getTemperature();
echo "<br>";
echo $Duvel->getAlcoholpercentage();
echo "<br>";
echo $Duvel->getAlcoholpercentage();
echo "<br>";
echo $Duvel->getColor();
echo "<br>";
echo $Duvel->getInfo();

