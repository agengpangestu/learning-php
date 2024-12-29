<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Pain Tendo";
$manager->testSay("Konan");

$vp = new VicePresident();
$vp->name = "Nagato";
$vp->testSay("Naruto");

$vp->getParentFunc("Ningen");