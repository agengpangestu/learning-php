<?php

// manipulation properties

require_once "OOP/data/Person.php";

$person = new Person("Ageng", null);
$person->name = "ageng" . PHP_EOL;
$person->address = "Sukoharjo" . PHP_EOL;
$person->country = "Indonesia" . PHP_EOL;

var_dump($person);

$person2 = new Person("pain", null);
$person2->name = "PAIN" . PHP_EOL;
$person2->address = null . PHP_EOL;
// $person2->address = null;
$person2->country = "Japan" . PHP_EOL;

var_dump($person2);
// $person2->name = []; 