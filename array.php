<?php

$arr = [1, 2, 34, 56, 7, 5];
$arr2 = array("a", "b", "c");

// var_dump($arr);
var_dump($arr2);


// change data in array
$arr[0] = "acumalaka";
var_dump($arr);

// delete
unset($arr[5]);
var_dump($arr);

// added new
$arr[] = "ningen";
var_dump($arr);

var_dump(count($arr));

$test = array(
    "id" => 1,
    "name" => "Ageng",
    "address" => "Sukoharjo, Jateng"
);
// or
$abc = [
    "id" => 1,
    "name" => "Ageng",
    "address" => "Sukoharjo, Jateng",
    "abilities" => [
        "push up" => "yes",
        "pull up" => "yes"
    ]
];
var_dump($abc['abilities']['push up']); // accessing abilities