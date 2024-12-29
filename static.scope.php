<?php

function decrement()
{
    static $counting = 10;
    echo "Count = $counting" . PHP_EOL;

    $counting--;
}

decrement();
decrement();
decrement();
decrement();
decrement();
decrement();