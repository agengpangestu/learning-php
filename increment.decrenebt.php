<?php

$a = 100;

$a++;
$a++;
$a++;

$b = ++$a;

$c = --$a;

var_dump($a);
var_dump($b);

var_dump($c);