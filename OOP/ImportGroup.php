<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// import using group use
use Data\One\{Conflict as Conflict1, Dummy as Dum, Sample};
use function Helper\{help};

$conflict = new Conflict1();
$dummy = new Dum();
$sample = new Sample();

help();