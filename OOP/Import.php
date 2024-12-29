<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\help; // accessing function
use const Helper\APP; // accessing constant

$conflict1 = new Conflict();
$conflict2 = new Data\Two\Conflict();

help();

echo APP . PHP_EOL;