<?php

// many example string function, check php website

$data = [1, 43, 54, 656, 45, 123, 4545, 3, 2, 1];

$res = array_map(fn(int $value) => $value * 10, $data);

var_dump($res);

rsort($data);
var_dump($data);

var_dump(array_keys($data)); // tale keys
var_dump(array_values($data)); // take values

$animals = [
    "name" => "Dragon",
    "type" => "carnivora",
];

var_dump(array_keys($animals));
var_dump(array_values($animals));