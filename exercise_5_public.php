<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
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
        echo "This beverage is {$this->temperature} and {$this->color}.";
    }

    function temperature()
    {
        echo "{$this->temperature}";
    }

    function price($price)
        {
            $this->price = $price;
            echo $price;
        }
}

$cola = new Beverage("black", 2);

$cola->getInfo();

echo "<br>";
$cola->temperature();
echo "<br>";
$cola->price(3.5);
