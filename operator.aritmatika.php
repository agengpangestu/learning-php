<?php

$total = 0;

$fruit = 4000;
$meat = 50000;
$ice_cream = 20000;

$discount = 20000;

// $total = $total + $fruit;

// short hand version
$total += $fruit;
$total += $meat;
$total += $ice_cream;

$total -= $discount;

var_dump($total);

