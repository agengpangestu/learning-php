<?php

$convert_to_string = (string) 100;
// var_dump($convert_to_string);

$convert = (int) "2000";
$to_float = (float) "200.02";

// var_dump($to_float);


// access character
$name = "itamio shire";

echo $name[10] . PHP_EOL;
echo $name[1] . PHP_EOL;

// variable parsing
echo "Pain: $name" . PHP_EOL;

// curly brace at variable parsing
echo "Naruto: what's {$name}zzzz" . PHP_EOL;