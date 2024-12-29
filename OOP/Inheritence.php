<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "John";
$manager->testSay("Pain");

$vicePre = new VicePresident();
$vicePre->name = "Konan";
$vicePre->testSay("Nagato");