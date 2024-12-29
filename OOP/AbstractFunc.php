<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Konan";
$cat->run();

$dog = new Dog();
$dog->name = "Nagato";
$dog->run();