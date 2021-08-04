<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require "exercise_1_classes.php";

$cola = new Beverage("black", 2);

$cola->getInfo();

echo "<br>" . $cola->temperature;
