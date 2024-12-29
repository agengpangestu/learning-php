<?php

$first = [
    "id" => 1,
];

$second = array(
    "id" => 2,
    "name" => "ageng",
);

// union, menggabungkan 2 array
$combined = $first + $second;
$combine = $second + $first;
// var_dump($combined);

$a = [
    "id" => 1,
    "name" => "ageng"
];

$b = array(
    "name" => "ageng",
    "id" => 1,
);

var_dump($a == $b); // equality
var_dump($a === $b); // identity 
var_dump($a != $b); // inequality