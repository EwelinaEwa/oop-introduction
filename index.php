<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require "exercise_1_classes.php";
require "exercise_2_extending.php";

$cola = new Beverage("black", 2);

$cola->getInfo();

echo "<br>";
echo $cola->temperature;
echo "<br>";
echo "<br>";
echo "<br>";

$Duvel = new Beer("Duvel", 8.5, "blond", 3.5);

echo $Duvel->temperature;
echo "<br>";
$Duvel->getAlcoholpercentage();
echo "<br>";
echo $Duvel->alcoholpercentage;
echo "<br>";
echo $Duvel->color;
echo "<br>";
echo $Duvel->getInfo();


