<?php

require_once "data/Car.php";

use Data\{Avansa};

$car = new Avansa();
$car->drive();
$car->getTire();
$car->getBrand();
$car->isMaintenance();