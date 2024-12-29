<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Helper;

// accessing namespace
$conflict1 = new \Data\One\Conflict;
$conflict2 = new Data\Two\Conflict;

// accessing namespace function and constant
echo Helper\APP . PHP_EOL; // accessing cosntant
Helper\help(); // accessing function