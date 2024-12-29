<?php

require_once "OOP/data/Person.php";

define("APP", "It's application");
const APP_VERSION = "1.0.1";

echo APP . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// accessing constant
echo Person::AUTHOR . PHP_EOL;