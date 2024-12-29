<?php

$name = "agemg";

if (is_string($name)) {
    echo "heaaayeah" . PHP_EOL;
} else {
    echo "noooooooooo" . PHP_EOL;
}

is_int($name) ? var_dump("correct") : var_dump("wrong");


if (is_array($name)):
    echo "heaaayeah" . PHP_EOL;
else:
    echo "noooooooooo" . PHP_EOL;
endif;


$gender = "Men";
$hoi = $gender == "Men" ? "hello sir" : "not u";

echo $hoi . PHP_EOL;