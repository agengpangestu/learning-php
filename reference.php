<?php

$name = "testing about how to learn PHP";

// $otherTest = &$name; // it's reference, added '&' before variable. value $otherTest set to $name
$otherTest = $name; // without reference, value $otherTest not set to $name
$otherTest = "pain tendo: Shinra Tense";

echo $name . PHP_EOL;

// pass by reference

function increment(int &$value) // added '&' befor $value parameter, for use pass by reference
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// returning reference

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 10;

$b = &getValue();

echo $b . PHP_EOL;