<?php

$t = null;
echo ("it's null : " . $t);
var_dump(is_null($t));
echo "\n";
echo "\n";

echo <<<acu
tes test
koe "tes"

acu;
echo "\n";

echo <<<'acu'
kamu makan ikan
tidak 'mau' ua

acu;
echo "\n";

define("i", "acumalaka");
define("test", "testing daong\n");

echo ("it's constant : " . i);
echo "\n";
echo test;
echo "\n";

$bb = "hihui";
unset($bb); // delete variable
var_dump(isset($bb)); // check variable and data null or not

$arr = [];
$arr2 = array("a", "b", "c");
var_dump(is_array($arr));
var_dump($arr2);