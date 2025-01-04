<?php
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("joni");
$person->hello("Pain");
$person->name = "Konan";
var_dump($person);

$person->run();