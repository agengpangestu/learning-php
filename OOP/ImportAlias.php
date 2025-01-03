<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use alias
use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\help as help; // accessing function
use const Helper\APP as APP; // accessing constant

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;