<?php

require_once "OOP/data/Person.php";

$nagato = new Person("Nagato", "Amegakure");
$nagato->name = "Nagato";

$nagato->testHello("Pain"); // accessing function

$konan = new Person("Konan", null);
$konan->name = "Nagato";

$konan->testHello(null);

$nagato->info();