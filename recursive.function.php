<?php

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

// using recursive
var_dump(factorialLoop(5));

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
var_dump(factorialRecursive(10));

function loop(int $value)
{
    if ($value == 0) {
        echo "Ended loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(1000000);